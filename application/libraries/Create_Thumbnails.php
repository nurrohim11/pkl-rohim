<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_Thumbnails
{
	function resize($path='', $width='', $height='', $new_image='')
	{
		if ($path != '' && $width != '' && $height != '') {
			$ci =& get_instance();

			$config = array(
				'image_library' => 'gd2',
				'source_image' => $path,
				'create_thumb' => TRUE,
				'maintain_ratio' => TRUE,
				'width' => $width,
				'height' => $height,
				'thumb_marker' => '_thumb'
			);

			if ($new_image != '') {
				$config['new_image'] = $new_image;
			}

			$ci->load->library('image_lib', $config);
			$ci->image_lib->resize();

			if ( ! $ci->image_lib->resize()) {
			    return $ci->image_lib->display_errors();
			} else {
				return TRUE;
			}
		}
	}

	/*
		ojo nggo iki
		Mending javascript
	*/
	function crop($path='', $x_axis='', $y_axis='', $new_image='')
	{
		if ($path != '' && $x_axis != '' && $y_axis != '') {
			$ci =& get_instance();

			$config = array(
				'image_library' => 'gd2',
				'source_image' => $path,
				'maintain_ratio' => TRUE,
				'x_axis' => $x_axis,
				'y_axis' => $y_axis
			);

			if ($new_image != '') {
				$config['new_image'] = $new_image;
			}

			$ci->load->library('image_lib', $config);
			$ci->image_lib->crop();

			if ( ! $ci->image_lib->crop()) {
			    return $ci->image_lib->display_errors();
			} else {
				return TRUE;
			}
		}
	}
}

/* End of file Create_Thumbnails.php */
/* Location: ./application/libraries/Create_Thumbnails.php */
?>