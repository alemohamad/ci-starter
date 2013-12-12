<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller
{

    private $title = "Manage admin users";
    private $file = "settings";

    protected $models = array( 'settings' );

    public function __construct()
    {
        parent::__construct();
        if (!$this->authentication->is_loggedin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Warning!</h4>You must be logged in to access the system and make changes.</div>');
            redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        if($this->authentication->read('username') != 'admin' || !ADMIN_MULTIUSER) {
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
            $user = $this->input->post('user');
            $password = $this->input->post('password');

            $user_id = $this->authentication->create_user($user, $password);

            $info['name'] = $this->input->post('name');
            $info['email'] = $this->input->post('email');
            $info['permissions'] = implode(",", $this->input->post('permissions'));
            $info['created_at'] = date("Y-m-d H:i:s");

            $this->settings->update($user_id, $info);

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

            if($this->input->post('password') != "") {
                $password = $this->input->post('password');
                $this->authentication->change_password($password, $info['id']);
            }

            $info['name'] = $this->input->post('name');
            $info['email'] = $this->input->post('email');
            $info['permissions'] = implode(",", $this->input->post('permissions'));

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
        $this->data['item'] = $this->settings->get($this->authentication->read('identifier'));

        $this->load->library('formulize');
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

            if($this->authentication->read('username') == 'admin' && ADMIN_MULTIUSER) {
                $info['permissions'] = $this->input->post('permissions');
            }

            if($this->input->post('pass_new') == $this->input->post('pass_new_repeat')) {
                if($this->input->post('pass_new') != "") {
                    $this->authentication->change_password($this->input->post('pass_new'));
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

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Success!</h4>The user info was updated without problems.</div>');
            redirect(base_url() . 'admin/' . $this->file . '/profile');
        }

        redirect(base_url() . 'admin/' . $this->file . '/profile');
    }

    public function change_pagination()
    {
        $this->layout = FALSE;
        $this->view = FALSE;

        $pagination = $this->input->post('pagination');

        $info = $this->settings->as_array()->get($this->authentication->read('identifier'));
        $info['pagination'] = $pagination;
        $this->session->set_userdata($info);
        $this->settings->update($info['id'], $info);
    }

    public function clear_cache()
    {
        $this->layout = FALSE;
        $this->view = FALSE;

        $this->output->clear_all_cache();

        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file admin/settings.php */
/* Location: ./application/controllers/admin/settings.php */