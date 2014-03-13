<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MY_Controller
{

    protected $helpers = array( 'am', 'admin_language' );

    protected $models = array( 'related_galleries' );

    public function __construct()
    {
        parent::__construct();
        if (!$this->authentication->is_loggedin('admin')) {
            $this->session->set_flashdata("alert_message", lang_phrase('alert_not_logged_in') );
            $this->session->set_flashdata("alert_type", "warning");
            redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        redirect(site_url('admin'));
    }

    public function gallery_list($id = 0, $table)
    {
        if($id == 0) {
            die('error!');
        }

        $this->layout = FALSE;
        $this->view = 'admin/admin_views/gallery';

        $this->load->library('formulize');
        $output_form_fields = '';

        $var = isset($item->picture) ? $item->picture : '';
        $options = array('formats' => 'JPG, PNG', 'size' => '10 MB');
        $output_form_fields .= $this->formulize->create('New picture', 'picture', 'file', $var, $options)->render();

        $this->data['fields'] = $output_form_fields;
        $this->data['id'] = $id;
        $this->data['table'] = $table;

        $this->data['gallery'] = $this->related_galleries->order_by('order', 'asc')->get_many_by( array( 'visible' => 1, 'related_id' => $id, 'related_table' => $table ) );
    }

    public function create($id, $table) {
        $this->layout = FALSE;
        $this->view = FALSE;

        if($id == 0) {
            die('error!');
        }

        // if($this->input->post('form_submit')) {
            // upload and resize pictures
            $resizes = array(
                't' => array('w' =>  50, 'h' =>  50),
                's' => array('w' => 170, 'h' => 100),
                'l' => array('w' => 410, 'h' => 370)
            );
            $info['picture'] = upload_picture('raw', 'fd-file', ADMIN_PROJECT_CODE, 'gallery', '', $resizes);

            /*
            // upload and resize pictures with a zip file
            $resizes = array(
                't' => array('w' =>  50, 'h' =>  50),
                's' => array('w' => 170, 'h' => 100),
                'l' => array('w' => 410, 'h' => 370)
            );
            $pictures = upload_zip_pics('picture', ADMIN_PROJECT_CODE, 'gallery', '', $resizes);
            $i = 0;
            foreach($pictures as $picture) {
                $i++;
                $info['picture_' . $i] = $picture;
            }
            */

            $info['related_id'] = $id;
            $info['related_table'] = $table;
            $info['created_at'] = date("Y-m-d H:i:s");

            $this->related_galleries->insert($info);

            $this->session->set_flashdata("alert_message", lang_phrase('alert_create_success') );
            $this->session->set_flashdata("alert_type", "success");
            // redirect($_SERVER['HTTP_REFERER']); // with the file drop, this isnt necessary
        // } else {
        //     die('error!');
        // }
    }

    public function status($status, $id) {
        $this->layout = FALSE;
        $this->view = FALSE;

        if($id == 0) {
            die('error!');
        }

        if($this->input->post('picture_id')) {
            $pictures = $this->input->post('picture_id');
            foreach($pictures as $picture) {
                $item = array();
                if($status == 'delete') {
                    $this->related_galleries->delete($picture);
                } elseif($status == 'high') {
                    $item['highlighted'] = 1;
                    $this->related_galleries->update($picture, $item);
                } elseif($status == 'unhigh') {
                    $item['highlighted'] = 0;
                    $this->related_galleries->update($picture, $item);
                }
            }
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            die('error!');
        }
    }

    public function order($id) {
        $this->layout = FALSE;
        $this->view = FALSE;

        if($id == 0) {
            die('error!');
        }

        if($this->input->post('item')) {
            $i = 0;
            $item = $this->input->post('item');
            foreach ($item as $value) {
                $i++;
                $item = array();
                $item['id'] = $value;
                $item['order'] = $i;
                $this->related_galleries->update($item['id'], $item);
            }
        }
    }

}

/* End of file admin/gallery.php */
/* Location: ./application/controllers/admin/gallery.php */