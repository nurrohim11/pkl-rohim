<?php  
class GoogleTranslate {
	var $url = 'https://www.googleapis.com/language/translate/v2';
	var $api_key = 'AIzaSyAspaX59masB7qErpq95bFSu-SAWUidh-Q';

	function detect_language($words='') {
		$url = $this->url;
		$api_key = $this->api_key;
		$url = $url.'/detect?key='.$api_key.'&q='.rawurlencode($words);

		// init curl
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($curl); 

		// decode response
		$result = json_decode($response, true);
		$error = curl_error($curl);
		curl_close($curl);

		if ($error) {
			print_r($error);
		} else {
			$result = isset($result['data']['detections'][0][0]['language']) ? $result['data']['detections'][0][0]['language'] : '';

			if (! empty($result)) {
				return $result;
			} else {
				return '';
			}
		}
	}

	function translate($words='', $to='en')
	{
		$url = $this->url;
		$api_key = $this->api_key;

		$detect = $this->detect_language($words);

		$url = $url.'?key='.$api_key.'&q='.rawurlencode($words).'&source='.$detect.'&target='.$to;

		// init curl
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($curl); 

		// decode response
		$result = json_decode($response, true);
		$error = curl_error($curl);
		curl_close($curl);

		if ($error) {
			print_r($error);
		} else {
			$result = isset($result['data']['translations'][0]['translatedText']) ? $result['data']['translations'][0]['translatedText'] : '';
			
			return $result;
		}
	}
}
?>