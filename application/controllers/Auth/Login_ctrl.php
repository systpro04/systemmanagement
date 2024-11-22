<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_ctrl extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Login_mod','login');
    } 

    public function index()
    {
        if ($this->session->username != "") {
            redirect('dashboard');
        }
        $this->load->view('auth/login');

    }

    public function login_data() {
        if ($this->input->post()) {
            $username = $this->security->xss_clean($this->input->post('username'));
            $password = $this->security->xss_clean(md5($this->input->post('password')));

            $user = $this->login->login_data_result($username, $password);
            if ($user) {
                $emp_id = $user['emp_id'];

                $employee = $this->login->get_emp($emp_id);
    
                if ($employee) {
                    $user_details = $this->login->get_db_user($emp_id);
    
                    if ($user_details) {
                        if ($employee['current_status'] === "Inactive") {
                            $this->session->set_flashdata('message', 'This account is deactivated');
                            $this->session->set_flashdata('message_type', 'error');
                            redirect('login');
                        }
                        $this->session->set_userdata([
                            'id'             => $user_details['id'],
                            'emp_id'         => $employee['emp_id'],
                            'username'       => $user_details['username'],
                            'name'           => $employee['name'],
                            'status'         => $user_details['status'],
                            'current_status' => $employee['current_status'],
                            'position'       => $user_details['position'],
                            'hrms_position'  => $employee['position'],
                            'firstname'      => $employee['firstname'],
                            'lastname'       => $employee['lastname'],
                            'emp_type'       => $employee['emp_type'],
                            'dept_name'      => $employee['dept_name'],
                            'company'        => $employee['company'],
                            'business'       => $employee['business_unit'],
                            'photo'          => ltrim($employee['photo'], '.'),
                        ]);
    
                        $this->session->set_flashdata('SUCCESSMSG', 'Login successful');
                        redirect('dashboard');
                    }
                }
            } else {
                $this->session->set_flashdata('message', 'Invalid username or password');
                $this->session->set_flashdata('message_type', 'error');
            }
    
            redirect('login');
        } else {
            redirect('login');
        }
    }
    

    public function logout_data()
    {
        if ($this->session->id == "") {
            redirect('login');
        } else {
            $this->session->set_flashdata('message', 'You have successfully logged out');
            $this->session->set_flashdata('message_type', 'success');

            $this->session->sess_destroy();

            redirect('login');
        }
    }
    
}

