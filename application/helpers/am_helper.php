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
 
/* End of file am_helper.php */
/* Location: ./application/helpers/am_helper.php */