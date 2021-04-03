<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
	// sebelum menggunakan library
	// buat table log_auth
	// column id (int) auto inc
	// user_id (varchar)
	// timestamp (varchar)
	// signature (text)
	// set your header here.
	private $client_service = 'tokotap'; // change to yours
	private $auth_key = 'gmedia'; // change to yours

	function check_auth_client($flag=true)
	{
		$ci =& get_instance();
		$client_service = $ci->input->get_request_header('Client-Service', TRUE);
		$auth_key = $ci->input->get_request_header('Auth-Key', TRUE);
		$user_id = $ci->input->get_request_header('User-Id', TRUE); // user id untuk akses
		$timestamp = $ci->input->get_request_header('Timestamp', TRUE); // random timestamp. 
		// format java  user_timestamp SSSHHyyyyssMMddmm
		$signature = $ci->input->get_request_header('Signature', TRUE); // signature

		if ($flag == true) {
			// create encoded signature 
			$encoded_signature = $this->generate_signature($user_id, $timestamp);
			// jika cocok maka true
			// cocokkan encoded signature dgn signature dari request
			if ($signature == $encoded_signature) {
				$time = substr($timestamp, 3, 17); // convert random timestamp to timestamp normal

				$check_expired = $this->check_expired($time);
				$flag_expired = isset($check_expired->flag_expired) ? $check_expired->flag_expired : 0;
				if ($flag_expired == 0) {
					$check_auth = $this->check_auth($user_id, $timestamp, $signature);
					if (empty($check_auth)) {
						$data = array(
							'user_id' => $user_id,
							'timestamp' => $timestamp,
							'signature' => $signature
						);

						$this->simpan_authentication($data);

						return TRUE;
					} else {
						$response = array(
							'response' => [],
							'metadata' => array(
								'status' => 401,
								'message' => 'You dont have permission to access this app'
							)
						);

						return json_encode($response);
					}
				} else {
					$response = array(
						'response' => [],
						'metadata' => array(
							'status' => 401,
							'message' => 'Token has been expired or revoked'
						)
					);

					return json_encode($response);
				}
			} else {
				$response = array(
					'response' => [],
					'metadata' => array(
						'status' => 401,
						'message' => 'Unauthorized'
					)
				);

				return json_encode($response);
			}
		} else {
			if ($auth_key == $this->auth_key && $client_service == $this->client_service) {
				return TRUE;
			} else {
				$response = array(
					'response' => [],
					'metadata' => array(
						'status' => 401,
						'message' => 'Unauthorized'
					)
				);

				return json_encode($response);
			}
		}
	}

	function generate_timestamp()
	{
		$now = date('Y-m-d H:i:s');
		$seconds = (strtotime($now) / 1000);
		$seconds = round($seconds - ($seconds >> 0), 3) * 1000;

		$random = date('HYsmdi');
		$timestamp = $seconds.$random;

		return $timestamp; 
	}

	function generate_signature($user_id='', $timestamp='')
	{
		$signature = hash_hmac('sha256', $user_id.'&'.$timestamp,$user_id.'die', true);

		return base64_encode($signature);
	}

	function check_expired($time=0)
	{
		$ci =& get_instance();
		return $ci->db->query("
				SELECT 
				  (
				    STR_TO_DATE('$time', '%H%Y%S%m%d%i') < TIMESTAMP(DATE_SUB(NOW(), INTERVAL 10 MINUTE)) 
				    OR STR_TO_DATE('$time', '%H%Y%S%m%d%i') > TIMESTAMP(DATE_ADD(NOW(), INTERVAL 10 MINUTE))
				  ) AS flag_expired ")->row();
	}

	function simpan_authentication($data=[])
	{
		$ci =& get_instance();
		$ci->db->insert('log_auth', $data);
	}

	function check_auth($user_id='', $timestamp='', $signature='')
	{
		$ci =& get_instance();
		return $ci->db->where('user_id', $user_id)
				->where('timestamp', $timestamp)
				->where('signature', $signature)
				->get('log_auth')
				->row();
	}
}
?>