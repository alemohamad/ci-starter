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
    private $latin = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'ç', 'ü', 'à', 'è', 'ì', 'ò', 'ù', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', 'Ç', 'Ü', 'À', 'È', 'Ì', 'Ò', 'Ù');
    private $plain = array('a', 'e', 'i', 'o', 'u', 'n', 'c', 'u', 'a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', 'N', 'C', 'U', 'A', 'E', 'I', 'O', 'U');

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
        //Change the latin characters to plain characters
        $slug = str_replace($this->latin, $this->plain, $string);
        //Creates a human-friendly URL string with dashes
        $slug = url_title($slug);
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
