<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_Sys extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Menu/File_mod_new', 'file_mod');
    }
    public function index() {
        $this->load->view('_layouts/header');
        $this->load->view('menu/new_system');
        $this->load->view('_layouts/footer');
    }
    
    public function get_new_folders() {
        $team = $this->input->post('team');
        $module = $this->input->post('module');
        $sub_module = $this->input->post('sub_module');
    
        $folder_path = '\\\\172.16.42.144\\system';
        $user = 'Programming';
        $pass = 'Djlouei04';
        
        system("net use \"{$folder_path}\" /user:{$user} {$pass} >nul"); 
        
        $folders = glob($folder_path . '\\*', GLOB_ONLYDIR);
        $folders_ = $this->get_directories($folders, $team, $module, $sub_module);
        
        echo json_encode($folders_);
    }
    
    private function get_directories($folders, $team, $module, $sub_module) {
        $folder_data = [];
        $custom_order = ['ISR', 'ATTENDANCE', 'MINUTES', 'WALKTHROUGH', 'FLOWCHART', 'DFD', 'SYSTEM_PROPOSED', 'LOCAL_TESTING', 'UAT', 'LIVE_TESTING'];
        
        foreach ($folders as $folder) {
            $entry = basename($folder);

            if (in_array($entry, $custom_order)) {
                $file_data = $this->get_file_count($folder, $team, $module, $sub_module);
                
                $folder_data[] = [
                    'name' => $entry,
                    'path' => $folder,
                    'modified' => date("Y-m-d H:i:s", filemtime($folder)),
                    'file_count' => $file_data['count'],
                    'matched_files' => $file_data['matched_files'],
                    'size' => $this->get_folder_size($folder, $team, $module, $sub_module)
                ];
            }
        }
        
        usort($folder_data, function($a, $b) use ($custom_order) {
            $index_a = array_search($a['name'], $custom_order);
            $index_b = array_search($b['name'], $custom_order);
            return $index_a - $index_b;
        });
        
        return $folder_data;
    }

    private function get_file_count($folder_path, $team, $module, $sub_module) {
        $file_count = 0;
        $matched_files = [];
        $files = scandir($folder_path);
        
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $file_path = $folder_path . '/' . $file;
                if (is_file($file_path)) {
                    $file_detail = $this->file_mod->get_file_details($file, $team, $module, $sub_module);
                    if ($file_detail) {
                        $file_count++; 
                        $matched_files[] = $file; 
                    }
                }
            }
        }
        
        return [
            'count' => $file_count,
            'matched_files' => $matched_files
        ];
    }
    
    private function get_folder_size($folder_path, $team, $module, $sub_module) {
        $total_size = 0;
        $files = scandir($folder_path);
    
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $file_path = $folder_path . '/' . $file;
                
                if (is_file($file_path)) {
                    $file_detail = $this->file_mod->get_file_details($file, $team, $module, $sub_module);
                    if ($file_detail) {
                        $total_size += filesize($file_path);
                    }
                } elseif (is_dir($file_path)) {
                    $total_size += $this->get_folder_size($file_path, $team, $module, $sub_module);
                }
            }
        }
    
        return $total_size;
    }
    
    private function get_matched_files($folder_path, $team, $module, $sub_module) {
        $matched_files = [];
        $files = glob($folder_path . '\\*');

        foreach ($files as $file) {
            if (is_file($file)) {
                $file_detail = $this->file_mod->get_file_details(basename($file), $team, $module, $sub_module);

                if ($file_detail) {
                    $matched_files[] = [
                        'name' => basename($file),
                        'path' => $file,
                        'size' => filesize($file),
                        'modified' => date("M d, Y", filemtime($file)),
                    ];
                }
            }
        }
        return $matched_files;
    }
    
    
    public function view_new_folder_modal() {

        $folder_name = $this->input->get('folder_name');
        $team = $this->input->get('team');
        $module = $this->input->get('module');
        $sub_module = $this->input->get('sub_module');
    
        $folder_path = '\\\\172.16.42.144\\system\\' . $folder_name;
    
        $matched_files = $this->get_matched_files($folder_path, $team, $module, $sub_module);

        $data = [
            'matched_files' => $matched_files
        ];
    
        echo json_encode($data);
    }
    
    public function delete_file_new() {
        $folder_name = $this->input->post('folder_name');
        $file_name = $this->input->post('file_name');
        
        $file_path = '\\\\172.16.42.144\\system\\' . $folder_name . '\\' . $file_name;
        
        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                $deleteResult = $this->file_mod->delete_file_record($file_name);
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Unable to delete file.']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'File does not exist.']);
        }
    }



    public function upload_new_files() {
        $response = ['success' => false, 'message' => ''];
        // Define the ordered sequence of directories
        $directory_order = [
            "ISR", "ATTENDANCE", "MINUTES", "WALKTHROUGH", "FLOWCHART", "DFD", "SYSTEM_PROPOSED", "LOCAL_TESTING", "UAT", "LIVE_TESTING"
        ];
    
        $selected_directory = $this->input->post('directory');
        $team = $this->input->post('file_team');
        $module = $this->input->post('file_module');
        $sub_module = $this->input->post('file_sub_module');
        $manager_key = $this->input->post('manager_key');
    
        if ($manager_key) {
            if (!$this->validate_manager_key($manager_key)) {
                $response['message'] = "Invalid manager's key.";
                echo json_encode($response);
                return;
            }
        } else {
            $current_index = array_search($selected_directory, $directory_order);
            if ($current_index === false) {
                $response['message'] = 'Invalid directory selected.';
                echo json_encode($response);
                return;
            }
    
            if ($current_index > 0) {
                $previous_directory = $directory_order[$current_index - 1];
    
                $pending_files = $this->file_mod->get_pending_files($team, $module, $sub_module, $previous_directory);
    
                if ($pending_files) {
                    $response['message'] = "Approve pending files first in the \"$previous_directory\" directory before proceeding.";
                    echo json_encode($response);
                    return;
                }
    
                $previous_files_exist = $this->file_mod->check_files_exist($team, $module, $sub_module, $previous_directory);
                if (!$previous_files_exist) {
                    $response['message'] = "Please upload files to the \"$previous_directory\" directory before proceeding to \"$selected_directory\".";
                    echo json_encode($response);
                    return;
                }
            }
        }
    
        $folder_path = '\\\\172.16.42.144\\system\\' . $selected_directory;
        $config['upload_path'] = $folder_path;
        $config['allowed_types'] = '*'; 
        $config['max_size'] = 5000000000;
        $this->load->library('upload', $config);
    
        $uploaded_files = $_FILES['file'];
        $files_count = count($uploaded_files['name']);
        $success_count = 0;
    
        for ($i = 0; $i < $files_count; $i++) {
            $file_name = $uploaded_files['name'][$i];
            $file_exists_db = $this->file_mod->file_exists_new($file_name, $team, $module, $sub_module, $selected_directory);
    
            $file_path = $folder_path . '\\' . $file_name;
            if ($file_exists_db || file_exists($file_path)) {
                $response['message'] = "File '{$file_name}' already exists in the directory.";
                continue;
            }
    
            $_FILES['file']['name'] = $file_name;
            $_FILES['file']['type'] = $uploaded_files['type'][$i];
            $_FILES['file']['tmp_name'] = $uploaded_files['tmp_name'][$i];
            $_FILES['file']['error'] = $uploaded_files['error'][$i];
            $_FILES['file']['size'] = $uploaded_files['size'][$i];
    
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $success_count++;
    
                $uploaded_data = $this->upload->data();
                $data = [
                    'team_id'           => $team,
                    'mod_id'            => $module,
                    'sub_mod_id'        => $sub_module,
                    'uploaded_to'       => $selected_directory,
                    'file_name'         => $uploaded_data['file_name'],
                    'date_uploaded'     => date('Y-m-d H:i:s'),
                    'isr_status'        => 'pending',
                    'wt_status'         => 'pending',
                    'flowchart_status'  => 'pending',
                    'dfd_status'        => 'pending',
                    'proposed_status'   => 'pending',
                    'local_status'      => 'pending',
                    'uat_status'        => 'pending',
                    'live_status'       => 'pending',
                    'typeofsystem'      => 'new'
                ];
    
                $this->file_mod->upload_file($data);
            }
        }
    
        if ($success_count === $files_count) {
            $response['success'] = true;
            $response['message'] = 'Files uploaded successfully.';
        }
        echo json_encode($response);
    }
    
    private function validate_manager_key($key) {
        $valid_key = 'new';
        return $key === $valid_key;
    }
    
    
    // public function upload_new_files() {

    //     $response = ['success' => false, 'message' => ''];
    //     $path = $this->input->post('directory');
    //     $team = $this->input->post('file_team');
    //     $module = $this->input->post('file_module');
    //     $sub_mod_id = $this->input->post('file_sub_module');
    
    //     $folder_path = '\\\\172.16.42.144\\system\\' . $path;
    
    //     $config['upload_path'] = $folder_path;
    //     $config['allowed_types'] = '*'; 
    //     $config['max_size'] = 5000000000;
        
    //     $this->load->library('upload', $config);
    
    //     $uploaded_files = $_FILES['file'];
    //     $files_count = count($uploaded_files['name']);
    //     $success_count = 0;
    
    //     for ($i = 0; $i < $files_count; $i++) {
    //         $file_name = $uploaded_files['name'][$i];
    //         $file_exists_db = $this->file_mod->file_exists_new($file_name, $team, $module, $sub_mod_id, $path);
            
    //         $file_path = $folder_path . '\\' . $file_name;
    //         if ($file_exists_db || file_exists($file_path)) {
    //             $response['message'] = "File '{$file_name}' already exists in the directory.";
    //             continue;
    //         }

    //         $_FILES['file']['name'] = $file_name;
    //         $_FILES['file']['type'] = $uploaded_files['type'][$i];
    //         $_FILES['file']['tmp_name'] = $uploaded_files['tmp_name'][$i];
    //         $_FILES['file']['error'] = $uploaded_files['error'][$i];
    //         $_FILES['file']['size'] = $uploaded_files['size'][$i];
    
    //         $this->upload->initialize($config);
    //         if ($this->upload->do_upload('file')) {
    //             $success_count++;
    
    //             $uploaded_data = $this->upload->data();
    //             $data = [
    //                 'team_id'           => $team,
    //                 'mod_id'            => $module,
    //                 'sub_mod_id'        => $sub_mod_id,
    //                 'uploaded_to'       => $path,
    //                 'file_name'         => $uploaded_data['file_name'],
    //                 'date_uploaded'     => date('Y-m-d H:i:s'),
    //                 'isr_status'        => 'pending',
    //                 'wt_status'         => 'pending',
    //                 'flowchart_status'  => 'pending',
    //                 'dfd_status'        => 'pending',
    //                 'proposed_status'   => 'pending',
    //                 'local_status'      => 'pending',
    //                 'uat_status'        => 'pending',
    //                 'live_status'       => 'pending',
    //                 'typeofsystem'      => 'new'
    //             ];
    
    //             $this->file_mod->upload_file($data);
    //         }
    //     }
    
    //     if ($success_count === $files_count) {
    //         $response['success'] = true;
    //         $response['message'] = 'Files uploaded successfully.';
    //     }
    //     echo json_encode($response);
    // }



    




    public function open_new_image($folder_name, $image){
        
        $folder_path = '\\\\172.16.42.144\\system\\' . $folder_name . '\\' . $image;
        $extension = pathinfo($folder_path, PATHINFO_EXTENSION);
        
        switch (strtolower($extension)) {
            case 'jpg':
            case 'jpeg':
                header('Content-Type: image/jpeg');
                break;
            case 'png':
                header('Content-Type: image/png');
                break;
            case 'gif':
                header('Content-Type: image/gif');
                break;
            case 'jfif':
                header('Content-Type: image/jfif');
                break;
        }
        readfile($folder_path);
    }
    public function open_new_pdf($folder_name, $pdf){
        $folder_path = '\\\\172.16.42.144\\system\\' . $folder_name . '\\'. $pdf;
        header('Content-Type: application/pdf');
        readfile($folder_path);
    }
    public function open_new_csv($folder_name, $csv){
        $csv = urldecode($csv);
        $folder_path = '\\\\172.16.42.144\\system\\' . $folder_name . '\\' . $csv;
        

        header('Content-Type: text/csv');
        header('Content-Disposition: inline; filename="' . basename($csv) . '"');
        header('Pragma: no-cache');
        header('Expires: 0');
        
        $file = fopen($folder_path, 'r');
        if ($file) {
            while (($line = fgets($file)) !== false) {
                echo $line;
            }
            fclose($file);
        }

    }
    public function open_new_txt($folder_name, $txt){
        $folder_path = '\\\\172.16.42.144\\system\\' . $folder_name . '\\'. $txt;
        header('Content-Type: text/plain');
        readfile($folder_path);
    }
    public function open_new_audio($folder_name, $audio){
        $folder_path = '\\\\172.16.42.144\\system\\' . $folder_name . '\\'. $audio;
        $extension = pathinfo($audio, PATHINFO_EXTENSION);
    
        switch(strtolower($extension)) {
            case 'mp3':
                $content_type = 'audio/mpeg';
                break;
            case 'wav':
                $content_type = 'audio/wav';
                break;
            case 'ogg':
                $content_type = 'audio/ogg';
                break;
            default:
                $content_type = 'application/octet-stream'; // Fallback content type
                break;
        }
    
        header('Content-Type: ' . $content_type);
        readfile($folder_path);
    }
    



}
