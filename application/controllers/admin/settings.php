<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller
{

    private $title = "User info";
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
        $this->layout = 'admin/layouts/admin.php';

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;
        $this->data['item'] = $this->settings->get(1);
    }

    public function edit($id)
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

        redirect(base_url() . 'admin/' . $this->file);
    }

}

/* End of file admin/settings.php */
/* Location: ./application/controllers/admin/settings.php */