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
function upload_picture($status, $file_name, $project, $section, $prev_file = '', $resize_sizes = '', $quality = 70, $path = './assets/uploads/', $types = 'jpg|jpeg|png', $max_size = 10000) {
    $uploaded_file = upload_file($status, $file_name, $project, $section, $prev_file, $path, $types, $max_size);

    if(is_array($uploaded_file)) {
        return resize_uploaded_picture($uploaded_file, $resize_sizes, $quality);
    }

    return $uploaded_file;
}

function upload_file($status, $file_name, $project, $section, $prev_file = '', $path = './assets/uploads/', $types = 'jpg|jpeg|png', $max_size = 10000) {
    $CI =& get_instance();
    $CI->load->library('upload');

    // if the directory not exists, we create it
    if(!is_dir($path)) {
        mkdir($path, 0777, TRUE);
    }

    // if we can't write in the folder, we change that from here
    $perms = substr(sprintf('%o', fileperms($path)), -4);
    if($perms != '0777') {
        chmod($path, 0777);
    }
    
    $extension = explode('|', $types);

    $config = array();
    // $time = date('YmdHis');
    $time = round(microtime(true) * 10000);
    $config['file_name_wo_ext'] = $time . '_' . $project . '_' . $section;
    $config['file_name'] = $config['file_name_wo_ext'] . '.' . $extension[0];
    $config['upload_path'] = $path;
    $config['allowed_types'] = $types;
    $config['max_size']    = $max_size;

    if ($status == 'raw') {
        // Raw POST data.
        $data = file_get_contents("php://input");
        file_put_contents($config['upload_path'].$config['file_name'], $data);

        $array_file = array();
        $array_file['raw_name'] = $config['file_name_wo_ext'];
        $array_file['file_path'] = $config['upload_path'];
        $array_file['full_path'] = $config['upload_path'].$config['file_name'];
        return $array_file;
    } else {
        $CI->upload->initialize($config);

        if($CI->upload->do_upload($file_name)) {
            $file = $CI->upload->data();
            // file_name, raw_name, file_type, full_path, file_path
            return $file; // array
        } else {
            // die($CI->upload->display_errors()); // show upload errors
        }
    }

    return $prev_file;
}

// custom resize picture code to reuse
function resize_uploaded_picture(array $file, $resize_sizes = '', $quality = 70) {
    $CI =& get_instance();
    $CI->load->library('image_moo');

    foreach($resize_sizes as $ext => $sizes) {
        if($sizes['w'] == 0 && $sizes['h'] == 0) {
            $CI->image_moo
                ->set_jpeg_quality(100)
                ->load($file['full_path'])
                ->save($file['file_path'] . $file['raw_name'] . '_' . $ext . '.jpg');
        } else {
            $CI->image_moo
                ->set_jpeg_quality($quality)
                ->load($file['full_path'])
                ->resize_crop($sizes['w'], $sizes['h'])
                ->save($file['file_path'] . $file['raw_name'] . '_' . $ext . '.jpg');
        }
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

function upload_zip_pics($status, $file_name, $project, $section, $prev_file = '', $resize_sizes = '', $quality = 70, $path = './assets/uploads/', $max_size = 10000) {
    $uploaded_file = upload_file($status, $file_name, $project, $section, $prev_file, $path, 'zip', $max_size);

    if(is_array($uploaded_file)) {
        $extracted_files = extract_zip($uploaded_file);

        $new_files = array();
        foreach($extracted_files as $extracted_file) {
             $new_files[] = resize_uploaded_picture($extracted_file, $resize_sizes, $quality);
        }

        return $new_files;
    }

    return $uploaded_file;
}

function extract_zip($uploaded_file) {
    $CI =& get_instance();
    $CI->load->helper('file');
    $CI->load->library('unzip');

    // if the directory not exists, we create it
    $temp_path = './assets/uploads/temp/';
    if(!is_dir($temp_path)) {
        mkdir($temp_path, 0777, TRUE);
    }

    $CI->unzip->extract('./assets/uploads/' . $uploaded_file['raw_name'] . '.zip', './assets/uploads/temp/');
    unlink('./assets/uploads/' . $uploaded_file['raw_name'] . '.zip'); // delete uploaded zip file

    $temp_files = get_dir_file_info('./assets/uploads/temp/');

    $pics = array();
    foreach($temp_files as $temp_file) {
        $item['full_path'] = $temp_file['relative_path'] . $temp_file['name'];
        $item['file_path'] = $temp_file['relative_path'] . '../';
        $item['raw_name'] = substr($temp_file['name'], 0, -4);
        $pics[] = $item;
    }

    return $pics;
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

// load file with no cache
function site_url_file($file_path) {
    return site_url($file_path . "?" . time());
}

/* End of file am_helper.php */
/* Location: ./application/helpers/am_helper.php */