<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeamEvents extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('session_expire');
		}

    }
    public function index(){
        $this->load->view('_layouts/header');
        $this->load->view('team_events');
        $this->load->view('_layouts/footer');
    }
    public function get_images_directory() {
        set_time_limit(5); 
        $folder_path = '\\\\172.16.42.144\\images';
        $user = 'Programming';
        $pass = 'Djlouei04';
        
        system("net use \"{$folder_path}\" /user:{$user} {$pass} >nul");
        $folders = glob($folder_path . '\\*');
        $folder_names = [];

        foreach ($folders as $folder) {
            $folder_name = basename($folder);
            $images = glob($folder . '\\*.{jpg,JPG,jpeg,png,gif}', GLOB_BRACE);
            $folder_names[] = [
                'name' => $folder_name,
                'images' => array_map(function ($img) use ($folder_name) {
                    return 'http://172.16.42.144/IMAGES/' . $folder_name . '/' . basename($img);
                }, $images)
            ];
        }
        echo json_encode($folder_names);
    }
}