<?php  
class Sendmail
{	
	// config (array config libary email ci) if null using default config on this library
	// from (email sender)
	// to (email receiver)
	// title (email title)
	// subject (email subject)
	// message (email message)
	function sending($config=[], $from='', $to='', $title='', $subject='', $message='', $cc=[], $bcc=[], $attach='')
	{
		$ci =& get_instance();
		$ci->load->library('email');

		if ($from != '') {
			if (empty($config)) {
				$config = $this->default_config($from);
			}

      		$ci->email->initialize($config);
      		$ci->email->set_newline('\r\n');
                  $ci->email->from($from, $title);
                  $ci->email->bcc($bcc);
                  $ci->email->cc($cc);
                  $ci->email->to($to);
                  $ci->email->subject($subject);
                  $ci->email->message($message);

                  if (is_array($attach)) {
                  	foreach ($attach as $row) {
                  		$ci->email->attach($row);
                  	}
                  } else {
                  	$ci->email->attach($attach);
                  }

                  $send = $ci->email->send();
                  if ($send) {
                  	return TRUE;
                  } else {
                  	return $ci->email->print_debugger();
                  }
		} else {
			return FALSE;
		}
	}

	function default_config($from='')
	{
            $config = array(
                  'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
                  'smtp_host' => 'mail.absenontime.com', 
                  'smtp_port' => 465,
                  'smtp_user' => 'no-reply@absenontime.com',
                  'smtp_pass' => 'janglidalam29j',
                  'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
                  'mailtype' => 'html', //plaintext 'text' mails or 'html'
                  'smtp_timeout' => '30', //in seconds
                  'charset' => 'iso-8859-1',
                  'wordwrap' => TRUE
            );

        return $config;
	}
}
?>