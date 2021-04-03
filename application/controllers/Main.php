<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
		is_login();
	}

	function index(){
		$header['css'] = datatable('css');
		$this->load->view('template/header');
		$this->load->view('main/dashboard');
		$this->load->view('template/footer');
	}

}