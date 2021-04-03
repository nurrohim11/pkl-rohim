<?php  
class Captchagoogle 
{
	// response (google captcha value) g-recaptcha-response
	// secret key (google secret key) from google api console
	function validation($response='', $secret_key='')
	{
		$ci =& get_instance();
		$ip = $ci->input->ip_address();

		$url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$response.'&remoteip='.$ip;
		$get_content = file_get_contents($url);
		$data = json_decode($get_content);

		if (isset($data->success) && $data->success == true) {
			// authentication success
			return TRUE;
		} else {
			// authentication failed
			return json_encode($data);
		}
	}
}
?>