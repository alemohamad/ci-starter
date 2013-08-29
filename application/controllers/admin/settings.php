<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller
{

    private $title = "Manage admin users";
    private $file = "settings";

    protected $models = array( 'settings' );

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
        if($this->session->userdata('user') != 'admin' || !ADMIN_USERS) {
            redirect(base_url() . 'admin/' . $this->file . '/profile');
        }

        $this->layout = 'admin/layouts/admin.php';

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['items'] = $this->settings->get_many_by( array('user !=' => 'admin') );
    }

    public function create()
    {
        $this->layout = FALSE;
        $this->view = 'admin/settings/form.php';

        if ($this->input->post('form_submit')) {
            $info = array();
            $info['user'] = $this->input->post('user');
            $info['password'] = $this->input->post('password');
            $info['name'] = $this->input->post('name');
            $info['email'] = $this->input->post('email');
            $info['created_at'] = date("Y-m-d H:i:s");

            $this->settings->insert($info);

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
        $this->view = 'admin/settings/form.php';

        if ($this->input->post('id')) {
            $info = array();
            $info['id'] = $this->input->post('id');
            $info['user'] = $this->input->post('user');
            $info['password'] = $this->input->post('password');
            $info['name'] = $this->input->post('name');
            $info['email'] = $this->input->post('email');

            $this->settings->update($info['id'], $info);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Success!</h4>The item was updated without problems.</div>');
            redirect(base_url() . 'admin/' . $this->file);
        }

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['item'] = $this->settings->get($id);
        $this->load->library('formulize');
    }

    public function delete($id)
    {
        $this->layout = FALSE;

        if ($this->input->post('id')) {
            $this->settings->delete($id);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Success!</h4>The item was deleted without problems.</div>');
            redirect(base_url() . 'admin/' . $this->file);
        }

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['item'] = $this->settings->get($id);
    }

    public function state($id)
    {
        $this->layout = FALSE;
        $this->view = FALSE;

        $info = $this->settings->get($id);

        if ($info->visible) {
            $info->visible = 0;
        } else {
            $info->visible = 1;
        }

        $this->settings->update($id, $info);

        $out = array('status' => $info->visible);
        echo json_encode($out);
    }

    public function profile()
    {
        $this->layout = 'admin/layouts/admin.php';

        $this->data['title'] = "User info";
        $this->data['file'] = $this->file;
        $this->data['item'] = $this->settings->get($this->session->userdata('id'));
    }

    public function edit_info($id)
    {
        $this->layout = FALSE;
        $this->view = FALSE;

        if ($this->input->post('id')) {
            $info = array();
            $info['id'] = $this->input->post('id');
            $info['name'] = $this->input->post('name');
            $info['email'] = $this->input->post('email');

            if($this->input->post('pass_new') == $this->input->post('pass_new_repeat')) {
                if($this->input->post('pass_new') != "") {
                    $info['password'] = $this->input->post('pass_new');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Error!</h4>New passwords are not the same.</div>');
                redirect(base_url() . 'admin/' . $this->file);
            }

            $this->settings->update($info['id'], $info);

            // update session info
            $data = array();
            $data['name'] = $info['name'];
            $data['email'] = $info['email'];
            $this->session->set_userdata($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Success!</h4>The item was updated without problems.</div>');
            redirect(base_url() . 'admin/' . $this->file);
        }

        redirect(base_url() . 'admin/' . $this->file . '/profile');
    }

}

/* End of file admin/settings.php */
/* Location: ./application/controllers/admin/settings.php */