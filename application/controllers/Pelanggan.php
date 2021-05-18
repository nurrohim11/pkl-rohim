<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
		is_login();
		$this->load->model('Pelanggan_model');
	}

	function index()
	{
		$header['css'] = datatable('css');
		$footer['js'] = datatable('js').'<script src="'.base_url().'assets/apps/js/pelanggan/pelanggan.js'.'"></script>';
		$this->load->view('template/header',$header);
		$this->load->view('pelanggan/pelanggan');
		$this->load->view('template/footer',$footer);
	}

	function data_pelanggan()
	{
        if ($this->input->is_ajax_request()) {
            $draw = $this->input->get('draw');
            $start = $this->input->get('start');
            $length = $this->input->get('length');
            $search = $this->input->get('search');
            $order = $this->input->get('order');

            $json = $this->Pelanggan_model->json_pelanggan($draw, $start, $length, $search['value'], $order[0]['column'], $order[0]['dir']);

            echo json_encode($json);
        } else {
            error_ajax();
        }
	}

	function process_pelanggan()
	{
		if($this->input->is_ajax_request()){

			$kode_pelanggan = $this->input->post('kode_pelanggan');
			$kode_template = $this->input->post('template');
            $nama = $this->input->post('nama');
            $no_hp = $this->input->post('no_hp');
            $alamat = $this->input->post('alamat');

            $user = ($kode_pelanggan) ? 'user_update' : 'user_insert';
            $time = ($kode_pelanggan) ? 'user_insert' : 'insert_at';

	        $data = array(
                'kode_template' => $kode_template,
                'nama' => $nama,
	        	'no_hp' => $no_hp,
                'alamat' => $alamat,
                $user=> $this->session->userdata('uid'),
                $time => now()
	        );

	        if($kode_template == '' || $nama == '' || $no_hp == '' || $alamat == ''){
	        	$status =false;
	        	if($alamat == ''){
		        	$message = "Alamat masih kosong";	
	        	}
	        	if($no_hp == ''){
	        		$message = "No. HP masih kosong";
	        	}
	        	if($nama == ''){
	        		$message = "Nama masih kosong";
	        	}
	        	if($kode_template == ''){
	        		$message = "Template masih kosong";
	        	}
	        }
	        else{
	        	if(empty($kode_pelanggan)){
	        		$data['kode_pelanggan'] = counter('PLG');
	        		$ins = $this->customdb->process_data('tb_pelanggan',$data);
	        		if($ins){
	        			$status = true;
	        			$message = "Pelanggan berhasil diupdate";
	        		}
	        		else{
	        			$status = false;
	        			$message = "Pelanggan gagal diupdate";
	        		}	
	        	}
	        	else{
	        		$upd = $this->customdb->process_data('tb_pelanggan',$data,['kode_pelanggan' => $kode_pelanggan]);
	        		if($upd){
	        			$status = true;
	        			$message = "Pelanggan berhasil diupdate";
	        		}
	        		else{
	        			$status = false;
	        			$message = "Pelanggan gagal diupdate";
	        		}
	        	}
	        }
			echo json_encode(['status' => $status,'message' => $message]);
		}
		else{
			error_ajax();
		}
	}

    function id_pelanggan(){
        if ($this->input->is_ajax_request()) {
            $kode_pelanggan = $this->input->post('kode_pelanggan');
            $response = [];

            $res = $this->db->query("
              	SELECT a.*,b.kode_template,b.template,c.uid ,c.nama as member 
					from tb_pelanggan a
					join (select * 
						from ms_template mt where mt.status =1
					) b
						on a.kode_template =b.kode_template
					left join tb_member c
						on c.uid =b.uid
					where c.status =1 and a.kode_pelanggan='$kode_pelanggan'
                ")->row();

            if($res){
                $response = $res;
                $status = true;
                $message ="Berhasil";
            }else{
                $status = false;
                $message = "Pelanggan tidak ada";
            }
            print_json($status,$message,$response);
        }else{
            error_ajax();
        }
    }

	function hapus_pelanggan()
	{
		if($this->input->is_ajax_request()){

			$kode_pelanggan= $this->input->post('kode_pelanggan');

			$del = $this->customdb->process_data('tb_pelanggan',['status' => 0],['kode_pelanggan' => $kode_pelanggan]);

			if($del){				
				$status = true;
				$message = "pelanggan berhasil dihapus";

			}
			else{
				$status = false;
				$message = "pelanggan gagal dihapus";
			}
			echo json_encode(['status' =>$status,'message' =>$message]);
		}
		else{
			error_ajax();
		}
	}

	function import_pelanggan()
	{
		if($this->input->is_ajax_request()){
			$kode_template = $this->input->post('template_import');
			$filename = 'pelanggan'.date('Ymdhis');
			$upload = $this->Pelanggan_model->upload_file($filename);
			$status_upload = $upload['status'];
			
	        if($kode_template == '' || $status_upload == false){
	        	$status =false;
	        	if($status_upload == false){
		        	$message = $upload['message'];
	        	}
	        	if($kode_template == ''){
	        		$message = "Template masih kosong";
	        	}
	        }
	        else{
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';
				
				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('./assets/uploads/pelanggan/'.$filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				$data = array();

				$numrow = 1;
				foreach($sheet as $row){
					if($numrow > 1){
						array_push($data, array(
							'kode_template' => $kode_template,
							'kode_pelanggan' => counter('PLG'),
							'nama'=>$row['A'],
							'no_hp'=>$row['B'], 
							'alamat'=>$row['C'],
						));
					}
					
					$numrow++;
				}
				$ins = $this->db->insert_batch('tb_pelanggan',$data);
				if($ins){
					$status = true;
					$message = "Pelanggan berhasil diimport";
				}
				else{
					$status = false;
					$message = "Pelanggan gagal diimport";
				}
	        }
	        echo json_encode(['status' =>$status,'message' =>$message]);
		}
		else{
			error_ajax();
		}
	}

}