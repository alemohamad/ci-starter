<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * Formulize class for ci-formulize library.
 *
 * @author Ale Mohamad <hello@alemohamad.com>
 * @version 1.2
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
     * @param string $type (options: txt, html, date, file, checkbox, select, list, tags, number, email, color, selectpic, password)
     * @param string $value (optional)
     * @param array $select_elements (optional)
     * Note: The $select_elements param can also be used to pass 'formats' and 'size' values to the 'file' type.
     *
     * @return object
     */
    public function create($name, $varname, $type = 'txt', $value = '', $select_elements = array(), $select_pics = array())
    {
        $this->item = array(
            'name'     => $name,
            'varname'  => $varname,
            'type'     => $type,
            'value'    => $value,
            'focus'    => '',
            'elements' => $select_elements,
            'pics'     => $select_pics
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
