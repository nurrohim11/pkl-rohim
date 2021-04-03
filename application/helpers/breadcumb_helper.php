<?php

function breadcumb()
{
    $ci =& get_instance();
    $class = $ci->router->fetch_class();
    $method = $ci->router->fetch_method();
    $query = $ci->db->query("
    		SELECT * from tb_menu a 
    		where a.fungsi = '$class' and a.method = '$method'
    	")->row();
    $d = $ci->db->query("SELECT * from tb_menu a where a.label ='$class'")->row();
    $url = isset($d->url) ? $d->url  : '';
    if($class=='main'){
    	$class = "Selamat Datang";
    }
	echo '<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				<a href="#">'.ucfirst($class).'</a></h3>
			<span class="kt-subheader__separator kt-hidden"></span>';
		if(!empty($query)){
			if($query->parent != 0){
				echo'
				<div class="kt-subheader__breadcrumbs">
					<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
					<span class="kt-subheader__breadcrumbs-separator"></span>
					<a href="" class="kt-subheader__breadcrumbs-link">
						'.ucfirst($query->label).'</a>
				</div>';
			}
		}
		else{
			$exp = explode("_", $method);
	    	$result = '';
	    	$numItems = count($exp);
			$i = 0;
			foreach($exp as $key=>$value) {
				$result .= $value.' ';
				if(++$i === $numItems) {
					$result .="";
				}
			}
			echo'
			<div class="kt-subheader__breadcrumbs">
				<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
				<span class="kt-subheader__breadcrumbs-separator"></span>
				<a href="" class="kt-subheader__breadcrumbs-link">
					'.ucwords($result).'</a>
			</div>';
		}
		echo '</div>';
}