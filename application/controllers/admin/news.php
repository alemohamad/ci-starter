<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends MY_Controller
{

    private $title = "News";
    private $file = "news";
    private $gallery = TRUE;

    protected $helpers = array( 'am', 'admin_language' );

    protected $models = array( 'news' );

    public function __construct()
    {
        parent::__construct();
        if (!$this->authentication->is_loggedin('admin')) {
            $this->session->set_flashdata("alert_message", lang_phrase('alert_not_logged_in') );
            $this->session->set_flashdata("alert_type", "warning");
            redirect(site_url('admin/login'));
        }

        verify_credentials($this->file, $this->session->userdata('permissions'), site_url('admin/settings'));
    }

    public function index()
    {
        $this->layout = 'admin/layouts/admin.php';
        $this->view = 'admin/admin_views/list.php';

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['items'] = $this->news->get_all();

        $this->data['create'] = TRUE;
        $this->data['edit'] = TRUE;
        $this->data['delete'] = TRUE;
        $this->data['state'] = TRUE;
        $this->data['export_file'] = TRUE;
        $this->data['show_list'] = TRUE;
        $this->data['display_fields'] = array('title', 'date', 'color_code', 'picture');
    }

    public function create()
    {
        $this->layout = FALSE;
        $this->view = 'admin/admin_views/form.php';

        if ($this->input->post('form_submit')) {
            $info = array();
            $info['title'] = $this->input->post('title');
            $info['text'] = $this->input->post('text');
            $info['email'] = $this->input->post('email');
            $info['date'] = $this->input->post('date');
            $info['display'] = ($this->input->post('display'))? 1 : 0;
            $info['typepic'] = $this->input->post('typepic');
            $info['type'] = (is_array($this->input->post('type'))) ? implode(",", $this->input->post('type')) : '';
            $info['tags'] = $this->input->post('tags');
            $info['order'] = $this->input->post('order');
            $info['code'] = $this->input->post('code');
            $this->load->library('Slug');
            $info['slug'] = $this->slug->create_unique_slug($info['title'], 'news');
            $info['created_at'] = date("Y-m-d H:i:s");

            // upload and resize pictures
            $resizes = array(
                't' => array('w' =>  50, 'h' =>  50),
                's' => array('w' => 170, 'h' => 100),
                'l' => array('w' => 410, 'h' => 370)
            );
            $info['picture'] = upload_picture('save', 'picture', ADMIN_PROJECT_CODE, $this->file, '', $resizes);

            /*
            // upload and resize pictures with a zip file
            $resizes = array(
                't' => array('w' =>  50, 'h' =>  50),
                's' => array('w' => 170, 'h' => 100),
                'l' => array('w' => 410, 'h' => 370)
            );
            $pictures = upload_zip_pics('picture', ADMIN_PROJECT_CODE, $this->file, '', $resizes);
            $i = 0;
            foreach($pictures as $picture) {
                $i++;
                $info['picture_' . $i] = $picture;
            }
            */

            $this->news->insert($info);

            $this->session->set_flashdata("alert_message", lang_phrase('alert_create_success') );
            $this->session->set_flashdata("alert_type", "success");
            redirect(base_url() . 'admin/' . $this->file);
        }

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['form_fields'] = $this->form_fields();
        $this->data['gallery'] = $this->gallery;
    }

    public function edit($id)
    {
        $this->layout = FALSE;
        $this->view = 'admin/admin_views/form.php';

        if ($this->input->post('id')) {
            $info = array();
            $info['id'] = $this->input->post('id');
            $info['title'] = $this->input->post('title');
            $info['text'] = $this->input->post('text');
            $info['email'] = $this->input->post('email');
            $info['date'] = $this->input->post('date');
            $info['display'] = ($this->input->post('display'))? 1 : 0;
            $info['typepic'] = $this->input->post('typepic');
            $info['type'] = (is_array($this->input->post('type'))) ? implode(",", $this->input->post('type')) : '';
            $info['tags'] = $this->input->post('tags');
            $info['order'] = $this->input->post('order');
            $info['code'] = $this->input->post('code');
            $this->load->library('Slug');
            $info['slug'] = $this->slug->create_unique_slug($info['title'], 'news');

            // upload and resize pictures
            $resizes = array(
                't' => array('w' =>  50, 'h' =>  50),
                's' => array('w' => 170, 'h' => 100),
                'l' => array('w' => 410, 'h' => 370)
            );
            $info['picture'] = upload_picture('save', 'picture', ADMIN_PROJECT_CODE, $this->file, $this->input->post('prev_picture'), $resizes);

            $this->news->update($info['id'], $info);

            $this->session->set_flashdata("alert_message", lang_phrase('alert_edit_success') );
            $this->session->set_flashdata("alert_type", "success");
            redirect(base_url() . 'admin/' . $this->file);
        }

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['item'] = $this->news->get($id);
        $this->data['form_fields'] = $this->form_fields($this->data['item']);
        $this->data['gallery'] = $this->gallery;
    }

    private function form_fields($item = '')
    {
        $this->load->library('formulize');
        $output_form_fields = '';

        $var = isset($item->title) ? $item->title : '';
        $output_form_fields .= $this->formulize->create('Title', 'title', 'txt', $var)->render();

        $var = isset($item->text) ? $item->text : '';
        $output_form_fields .= $this->formulize->create('Text', 'text', 'html', $var)->render();

        $var = isset($item->email) ? $item->email : '';
        $output_form_fields .= $this->formulize->create('Email', 'email', 'email', $var)->render();

        $var = isset($item->date) ? $item->date : '';
        $output_form_fields .= $this->formulize->create('Date', 'date', 'date', $var)->render();

        $var = isset($item->picture) ? $item->picture : '';
        $options = array('formats' => 'JPG, PNG', 'size' => '2 MB');
        $output_form_fields .= $this->formulize->create('Picture', 'picture', 'file', $var, $options)->render();

        $var = isset($item->display) ? $item->display : '';
        $output_form_fields .= $this->formulize->create('Display', 'display', 'checkbox', $var)->render();

        $elements = array(
            'sports'     => 'Sports',
            'technology' => 'Technology',
            'fashion'    => 'Fashion'
        );
        $var = isset($item->type) ? $item->type : '';
        $output_form_fields .= $this->formulize->create('Type', 'type', 'select', $var, $elements)->render();

        $elements = array(
            'sport' => 'Sport',
            'music' => 'Music',
            'paint' => 'Paint'
        );
        $elements_pics = array(
            site_url('assets/img/sport.jpg'),
            site_url('assets/img/music.jpg'),
            site_url('assets/img/paint.jpg')
        );
        $var = isset($item->typepic) ? $item->typepic : '';
        $output_form_fields .= $this->formulize->create('Type pic', 'typepic', 'selectpic', $var, $elements, $elements_pics)->render();

        $elements = array(
            'sports'     => 'Sports',
            'technology' => 'Technology',
            'fashion'    => 'Fashion'
        );
        $var = isset($item->type) ? $item->type : '';
        $output_form_fields .= $this->formulize->create('Type', 'type', 'list', $var, $elements)->render();

        $var = isset($item->tags) ? $item->tags : '';
        $output_form_fields .= $this->formulize->create('Tags', 'tags', 'tags', $var)->render();

        $var = isset($item->order) ? $item->order : '';
        $output_form_fields .= $this->formulize->create('Order', 'order', 'number', $var)->render();

        $var = isset($item->code) ? $item->code : '';
        $output_form_fields .= $this->formulize->create('Color code', 'code', 'color', $var)->render();

        return $output_form_fields;
    }

    public function delete($id)
    {
        $this->layout = FALSE;
        $this->view = 'admin/admin_views/delete.php';

        if ($this->input->post('id')) {
            $this->news->delete($id);

            $this->session->set_flashdata("alert_message", lang_phrase('alert_delete_success') );
            $this->session->set_flashdata("alert_type", "success");
            redirect(base_url() . 'admin/' . $this->file);
        }

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['item'] = $this->news->get($id);
        $this->data['delete_title'] = 'title';
    }

    public function state($id)
    {
        $this->layout = FALSE;
        $this->view = FALSE;

        $info = $this->news->get($id);

        if ($info->visible) {
            $info->visible = 0;
        } else {
            $info->visible = 1;
        }

        $this->news->update($id, $info);

        $out = array('status' => $info->visible);
        echo json_encode($out);
    }

    public function export()
    {
        $this->layout = FALSE;
        $this->view = FALSE;

        $this->load->helper('export_csv');

        $fields = array(
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'email' => 'Email',
            'date' => 'Date',
            'picture' => 'Picture',
            'display' => 'Display',
            'type' => 'Type',
            'typepic' => 'Type Pic',
            'tags' => 'Tags',
            'order' => 'Order',
            'code' => 'Color code',
            'visible' => 'Visible',
            'created' => 'Created',
            'updated' => 'Updated'
        );

        $items = $this->news->get_all();

        $query = array();
        foreach ($items as $item) {
            $query[] = array(
                'id' => $item->id,
                'title' => $item->title,
                'text' => $item->text,
                'email' => $item->email,
                'date' => $item->date,
                'picture' => $item->picture,
                'display' => $item->display,
                'type' => $item->type,
                'typepic' => $item->typepic,
                'tags' => $item->tags,
                'order' => $item->order,
                'code' => $item->code,
                'visible' => $item->visible,
                'created' => $item->created_at,
                'updated' => $item->updated_at
            );
        }

        echo arrayToCSV($query, $fields, $this->file);
    }

}

/* End of file admin/news.php */
/* Location: ./application/controllers/admin/news.php */