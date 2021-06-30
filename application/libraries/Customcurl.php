<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Customcurl
{

	function wa_send_message($plg=[])
	{
		if($plg){
			foreach($plg as $row){

				$data = array(
					'number' => $row['nomor'],
					'message' => $row['message']
				);

				$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => 'https://wapi-alkhattabi.herokuapp.com/send-message',
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => '',
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => true,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => 'POST',
				  CURLOPT_POSTFIELDS => json_encode($data) ,
				  CURLOPT_HTTPHEADER => array(
				    'Content-Type: application/json'
				  ),
				));

				$response = curl_exec($curl);

				curl_close($curl);
				return true;
			}	
		}
	}

	function wa_send_media($plg=[])
	{
		if($plg){
			foreach($plg as $row){
				$data = array(
					'number' => $row['nomor'],
					'message' => $row['message'],
					'image' => $row['image']
				);

				$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => 'https://wapi-alkhattabi.herokuapp.com/send_media',
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => '',
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => true,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => 'POST',
				  CURLOPT_POSTFIELDS =>json_encode($data),
				  CURLOPT_HTTPHEADER => array(
				    'Content-Type: application/json'
				  ),
				));

				$response = curl_exec($curl);

				curl_close($curl);
				return true;	
			}	
		}
	}

}