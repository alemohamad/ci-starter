<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Slug
 *
 * A simple slug generator for CodeIgniter.
 *
 */

class Slug
{

    private $CI;

    /*
     * Constructor
     * 
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper('url');
    }

    /*
     * Creates a unique slug. If a slug with the same name already exists in the DB, a number will be appended at the end of the string.
     * Example: item-1, item-2, ...
     * 
     * @param	string	$string
     * @param	string	$table
     * @return	string
     */
    public function create_unique_slug($string, $table)
    {
        //Creates a human-friendly URL string with dashes
        $slug = url_title($string);
        //Make the string lowercase
        $slug = strtolower($slug);
        //Set the initial counter to append at the end of the string (if duplicate)
        $i = 0;
        $params = array ();
        $params['slug'] = $slug;
        //Check if POST contains an 'id'. If it does, exclude the actual post in the check
        if ($this->CI->input->post('id')) {
            $params['id !='] = $this->CI->input->post('id');
        }

        while ($this->CI->db->where($params)->get($table)->num_rows()) {
            if (!preg_match ('/-{1}[0-9]+$/', $slug )) {
                $slug .= '-' . ++$i;
            } else {
                $slug = preg_replace ('/[0-9]+$/', ++$i, $slug );
            }
            $params ['slug'] = $slug;
        }
        return $slug;
    }

}
