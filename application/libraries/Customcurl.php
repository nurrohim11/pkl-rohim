<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Customcurl
{
    private $url = 'https://api.rajaongkir.com/starter/';

	function rajaongkir($endpointUrl='',$method='',$data='')
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $this->url.$endpointUrl,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => $method,
		  CURLOPT_POSTFIELDS => $data,
		  CURLOPT_SSL_VERIFYPEER => 1,
		  CURLOPT_HTTPHEADER => array(
    		"content-type: application/x-www-form-urlencoded",
		    'key: bcc390d552af66f5fa612f4562215461'
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return json_encode(json_decode($response,true)['rajaongkir']);

	}

	function otp($no_hp='',$message='')
	{
		$data = json_encode(['nomor' => $no_hp,'pesan'=>$message]);
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://erpsmg.gmedia.id/smsgw/api/sms_osbond',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_SSL_VERIFYPEER => 1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => $data,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$res = json_decode($response,true);
		if($res['status'] == 200){
			return true;
		}
		else{
			return false;
		}
	}

	function wa($no_hp='',$message='')
	{
		$curl = curl_init();
		$data = json_encode(['nomor' => $no_hp,'pesan'=>$message]);

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'http://gmedia.bz/wablast/Main/api_whatsapp',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_SSL_VERIFYPEER => 1,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS =>$data,
		  CURLOPT_HTTPHEADER => array(
		    'Content-Type: application/json'
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$res = json_decode($response,true);
		if($res['status'] == 1){
			return true;
		}
		else{
			return false;
		}
	}

	function firebase($uid='',$notification=null,$data=null)
	{
		$ci =& get_instance();
		$curl = curl_init();
		$response = array(
			'to' =>fcm_id($uid),
			'notification' => $notification,
			'data'=> $data
		);
		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_SSL_VERIFYPEER => 1,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS => json_encode($response),
		  CURLOPT_HTTPHEADER => array(
		    'Content-Type: application/json',
		    'Authorization: key=AAAAlVULTVw:APA91bGNkwjmFmmUo4-tjVJzPLYWKuJaUIZHcCGgyryt3PEUYp4B08oR9Rh1u4xARlqPPaURZu05YhCqfIMZNDi_s0davwxVaQSDAruxceOJdfzGELGYgIBwZDGN7AfGStxyKWBHBCYx'
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$res = json_decode($response,true);
		if($res['success'] == 1){
			$image = ($data != null) ? $data['image'] : '';
			// info
			$data_info = array(
				'uid' =>$uid,
				'title' => $notification['title'],
				'text' => $notification['body'],
				'image' => $image,
				'user_insert'=>'firebase'
			);
			$ins = $ci->customdb->process_data('tb_info',$data_info);

			$data_log = array(
				'to' => $uid,
				'notification' => json_encode($notification),
				'data' => json_encode($data),
				'response' => $response
			);
			$ci->customdb->process_data('log_trx_notifikasi',$data_log);
		}
	}

}