<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
function objectToArray( $object ) {
    if( !is_object( $object ) && !is_array( $object ) ) {
        return $object;
    }
    if( is_object( $object ) ) {
        $object = (array) $object;
    }
    return array_map( 'objectToArray', $object );
}

function slugify( $text ) {
    return url_title( $text, '-', TRUE );
}

function get_age( $birth_date = '0000-00-00' ) {
    if($birth_date == '0000-00-00') { return 0; }
    return floor( ( time() - strtotime($birth_date) ) / 31556926 );
}

function object2array($object) {
	return json_decode(json_encode($object), true);
}

// custom file upload code to reuse
function upload_picture($file_name, $project, $section, $prev_file = '', $resize_sizes = '', $quality = 70, $path = './assets/uploads/', $types = 'jpg|jpeg|png', $max_size = 2000) {
	$uploaded_file = upload_file($file_name, $project, $section, $prev_file, $path, $types, $max_size);

	if(is_array($uploaded_file)) {
		return resize_uploaded_picture($uploaded_file, $resize_sizes, $quality);
	}

	return $uploaded_file;
}

function upload_file($file_name, $project, $section, $prev_file = '', $path = './assets/uploads/', $types = 'jpg|jpeg|png', $max_size = 2000) {
	$CI =& get_instance();
	$CI->load->library('upload');

	// if we can't write in the folder, we change that from here
	$perms = substr(sprintf('%o', fileperms($path)), -4);
	if($perms != '0777') {
		chmod($path, 0777);
	}
	
	$extension = explode('|', $types);

    $config = array();
    $config['file_name'] = date('YmdHis') . '_' . $project . '_' . $section . '.' . $extension[0];
    $config['upload_path'] = $path;
    $config['allowed_types'] = $types;
    $config['max_size']	= $max_size;
    $CI->upload->initialize($config);

    if($CI->upload->do_upload($file_name)) {
        $file = $CI->upload->data();
		// file_name, raw_name, file_type, full_path, file_path
		return $file; // array
    }

	return $prev_file;
}

// custom resize picture code to reuse
function resize_uploaded_picture(array $file, $resize_sizes = '', $quality = 70) {
	$CI =& get_instance();
	$CI->load->library('image_moo');

	foreach($resize_sizes as $ext => $sizes) {
        $CI->image_moo
			->set_jpeg_quality($quality)
			->load($file['full_path'])
			->resize_crop($sizes['w'], $sizes['h'])
			->save($file['file_path'] . $file['raw_name'] . '_' . $ext . '.jpg');
	}

	if(is_array($resize_sizes)) {
    	unlink($file['full_path']);
	}

	return $file['raw_name'];
}

function picture_path($picture_path = '', $size = 'l') {
	$picture_path = './' . $picture_path;
	$result = FALSE;

	if(file_exists($picture_path . '_' . $size . '.jpg')) {
		$result = $picture_path . '_' . $size . '.jpg';
	}
	if(file_exists($picture_path . '_' . $size . '.png')) {
		$result = $picture_path . '_' . $size . '.png';
	}
	if(file_exists($picture_path . '.jpg')) {
		$result = $picture_path . '.jpg';
	}
	if(file_exists($picture_path . '.png')) {
		$result = $picture_path . '.png';
	}
	return substr($result, 2);
}

function year_moment() {
	$month = date('n');
	$day = date('j');
	switch($month) {
		case 2:
			if($day > 14) { return FALSE; }
			return '<span class="glyphicon glyphicon-heart" style="color:#EE0000;" rel="tooltip" data-title="Happy Valentine\'s Day"></span>';
			break;
		case 12:
			return '<span class="glyphicon glyphicon-tree-conifer" style="color:#659D32;"rel="tooltip" data-title="Merry Christmas!"></span>';
			break;
		default:
			return FALSE;
	}
}

function verify_credentials($file, $permissions, $redirect_to) {
	$redirect = TRUE;
    $admin_sections = explode(",", $permissions);
	foreach($admin_sections as $admin_section) {
		$section = explode("/", $admin_section);
        if(in_array($file, $section)) {
            $redirect = FALSE;
        }
	}
	if($redirect) {
		redirect($redirect_to);
	}
}

/* End of file am_helper.php */
/* Location: ./application/helpers/am_helper.php */