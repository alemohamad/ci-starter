<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{

    protected $models = array( 'settings' );

    public function index()
    {
        if ($this->session->userdata('logged_in') == TRUE) {
            redirect(site_url('admin'));
        }

        if ($this->input->post('user')) {
            $user = $this->input->post('user');
            $pass = $this->input->post('password');

            if ( $data = $this->settings->as_array()->get_by(array('user' => $user, 'password' => $pass)) ) {
                $data['logged_in'] = true;

                $this->session->set_userdata($data);
                redirect(base_url() . 'admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Ouch!</strong> The username or password are incorrect. Review the data and try again.</div>');
            }
        }

        $this->layout = 'admin/layouts/admin.php';
        $this->data['item'] = 'admin';
    }

    public function logout()
    {
        $data = array(
            'logged_in' => false
        );
        $this->session->set_userdata($data);
        redirect(base_url() . 'admin/login');
    }

}

/* End of file admin/login.php */
/* Location: ./application/controllers/admin/login.php */