<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * Formulize class for ci-formulize library.
 *
 * @author Ale Mohamad <hello@alemohamad.com>
 * @version 1.0
 * @link http://github.com/alemohamad/ci-formulize
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */

class Formulize
{

    public $item;
    public $first = TRUE;

    /**
     * Create new form item
     *
     * @param string $name
     * @param string $varname
     * @param string $type (options: txt, html, date, file, checkbox)
     * @param string $value (optional)
     *
     * @return object
     */
    public function create($name, $varname, $type = 'txt', $value = '')
    {
        $this->item = array(
            'name'    => $name,
            'varname' => $varname,
            'type'    => $type,
            'value'   => $value,
            'focus'   => ''
        );

        if($this->first) {
            $this->item['focus'] = 'autofocus';
            $this->first = FALSE;
        }

        return $this;
    }


    /**
     * Returns form item with the information
     *
     * @return html view
     */
    public function render()
    {
        $CI =& get_instance();

        $data['item'] = $this->item;

        return $CI->load->view('formulize/'.$this->item['type'], $data, true);
    }

}
