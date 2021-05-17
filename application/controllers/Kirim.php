<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    is_login();
		$this->load->model('Master_model');
	}

	function wa()
	{
		$header['css'] = datatable('css');
		$footer['js'] = datatable('js').'<script src="'.base_url().'assets/apps/js/wa.js'.'"></script>';
		$this->load->view('template/header',$header);
		$this->load->view('main/wa');
		$this->load->view('template/footer',$footer);
	}

	function send_wa()
	{
		if($this->input->is_ajax_request()){
			$message = $this->input->post('message');
			$metode_pengiriman = $this->input->post('metode_pengiriman');
			$template = $this->input->post('template');
			$pelanggan = $this->input->post('pelanggan');

			if($metode_pengiriman == 'plg'){

			}
			else{
				
			}
		}
		else{
			show_404();
		}
	}

}