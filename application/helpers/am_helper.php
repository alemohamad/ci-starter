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

/* End of file am_helper.php */
/* Location: ./application/helpers/am_helper.php */