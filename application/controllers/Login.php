<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	}

	function index(){
		
        $valid_cooke = $this->Login_model->is_valid_cookie();
        $valid_session = $this->Login_model->is_valid_session();

        $cookie_status = false;
        $session_status = false;
            
        if ($valid_cooke == true) {
            $valid_session = $this->Login_model->is_valid_session();
            if ($valid_session == true) {
                $cookie_status = true;
            } else {
                $cookie_status = false;
            }
        }

        if ($valid_session == true) {
            $session_status = true;
        }

        ($cookie_status == true || $session_status == true) ? redirect('main/index') : $this->load->view('login/login');

	}

    function authentication()
    {
        $username = $this->input->get('username');
        $password = $this->input->get('password');
        $remember = $this->input->get('remember');

        if ($username != '' && $password != '') {
            $auth = $this->Login_model->login($username, $password, $remember);

            $status = isset($auth['status']) ? $auth['status'] : false;
            $message = isset($auth['message']) ? $auth['message'] : '';
        } else {
            $status = false;
            $message = '';
            if ($username == '') {
                $message .= 'Username harus diisi <br>';
            }
            if ($password == '') {
                $message .= 'Password harus diisi <br>';
            }
        }

        $result = array(
            'status' => $status,
            'message' => $message
        );

        echo json_encode($result);
    }


    function logout()
    {
        delete_cookie('apiwa');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('uid');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('session');
        $this->session->unset_userdata('level');

        redirect('login');
    }
}