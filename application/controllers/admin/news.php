<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends MY_Controller
{

    private $title = "News";
    private $file = "news";

    protected $helpers = array( 'am' );

    protected $models = array( 'news' );

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') != TRUE) {
            $this->session->set_flashdata('message', '<div class="alert alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Warning!</h4>You must be logged in to access the system and make changes.</div>');
            redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        $this->layout = 'admin/layouts/admin.php';

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['items'] = $this->news->get_all();
    }

    public function create()
    {
        $this->layout = FALSE;
        $this->view = 'admin/news/form.php';

        if ($this->input->post('title')) {
            $info = array();
            $info['title'] = $this->input->post('title');
            $info['text'] = $this->input->post('text');
            $info['date'] = $this->input->post('date');
            $info['display'] = $this->input->post('display');
            $info['slug'] = slugify($info['title']);
            $info['created_at'] = date("Y-m-d H:i:s");

            /* FILE UPLOAD PICTURE */
            $this->load->library('upload');
            $config = array();
            $config['file_name'] = date('YmdHis') . '_project_news.jpg';
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']	= '2000';
            $this->upload->initialize($config);

            if($this->upload->do_upload('picture')) {
                $pic = $this->upload->data();
                $picName = $pic['file_name'];
                $picRaw = $pic['raw_name'];
                $picType = $pic['file_type'];
                $picPath = $pic['full_path'];
                $picPathFile = $pic['file_path'];

                $info['picture'] = $picRaw;

                $this->load->library('image_moo');
                $this->image_moo
                    ->load($picPath)
                    ->resize_crop(170,100)
                    ->save($picPathFile . $picRaw . '_s.jpg');
                $this->image_moo
                    ->load($picPath)
                    ->resize_crop(410,370)
                    ->save($picPathFile . $picRaw . '_l.jpg');
                unlink($picPath);
            }
            /* END UPLOAD PICTURE */

            $this->news->insert($info);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Success!</h4>The item was created without problems.</div>');
            redirect(base_url() . 'admin/' . $this->file);
        }

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->load->library('formulize');
    }

    public function edit($id)
    {
        $this->layout = FALSE;
        $this->view = 'admin/news/form.php';

        if ($this->input->post('id')) {
            $info = array();
            $info['id'] = $this->input->post('id');
            $info['title'] = $this->input->post('title');
            $info['text'] = $this->input->post('text');
            $info['date'] = $this->input->post('date');
            $info['display'] = $this->input->post('display');
            $info['slug'] = slugify($info['title']);

            /* FILE UPLOAD PICTURE */
            $this->load->library('upload');
            $config = array();
            $config['file_name'] = date('YmdHis') . '_project_news.jpg';
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']	= '2000';
            $this->upload->initialize($config);

            if($this->upload->do_upload('picture')) {
                $pic = $this->upload->data();
                $picName = $pic['file_name'];
                $picRaw = $pic['raw_name'];
                $picType = $pic['file_type'];
                $picPath = $pic['full_path'];
                $picPathFile = $pic['file_path'];

                $info['picture'] = $picRaw;

                $this->load->library('image_moo');
                $this->image_moo
                    ->load($picPath)
                    ->resize_crop(170,100)
                    ->save($picPathFile . $picRaw . '_s.jpg');
                $this->image_moo
                    ->load($picPath)
                    ->resize_crop(410,370)
                    ->save($picPathFile . $picRaw . '_l.jpg');
                unlink($picPath);
            } else {
                $info['picture'] = $this->input->post('prev_picture');
            }
            /* END UPLOAD PICTURE */

            $this->news->update($info['id'], $info);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Success!</h4>The item was updated without problems.</div>');
            redirect(base_url() . 'admin/' . $this->file);
        }

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['item'] = $this->news->get($id);
        $this->load->library('formulize');
    }

    public function delete($id)
    {
        $this->layout = FALSE;

        if ($this->input->post('id')) {
            $this->news->delete($id);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Success!</h4>The item was deleted without problems.</div>');
            redirect(base_url() . 'admin/' . $this->file);
        }

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['item'] = $this->news->get($id);
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

        $items = $this->news->get_all();
        $content = "ID;Title;Text;Date;Picture;Display;Visible;Created;Updated\r\n";
        foreach ($items as $item) {
            $content .= "{$item->id};{$item->title};{$item->text};{$item->date};{$item->picture};{$item->display};{$item->visible};{$item->created_at};{$item->updated_at}\r\n";
        }
        $filename = date('YmdHis') . "_export_" . $this->file . ".csv";

        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename={$filename}");
        header("Content-Length: " . strlen($content));
        header("Pragma: no-cache");

        echo $content;
    }

}

/* End of file admin/news.php */
/* Location: ./application/controllers/admin/news.php */