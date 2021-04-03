<?php  

function slug($text='') 
{
	// replace non letter or digits by -
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
 
    // trim
    $text = trim($text, '-');
 
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
 
    // lowercase
    $text = strtolower($text);
 
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
 
    if (empty($text)) {
        return 'n-a';
    }
 
    return $text;
}

function meta($keywords='', $description='', $author='Victor Fendi')
{
	$meta = '';
	if ($keywords != '') {
		$meta .= '<meta name="keywords" content="'.$keywords.'">';
	}

	if ($description != '') {
		$meta .= '<meta name="description" content="'.$description.'">';
	}

	if ($author != '') {
		$meta .= '<meta name="author" content="'.$author.'">';
	}
	
	return $meta;
}

?>