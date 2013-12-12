<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{

    protected $models = array( 'settings' );

    public function index()
    {
        if ($this->session->userdata('logged_in') == TRUE) {
            redirect('admin', 'refresh');
        }

        // if admin user does not exists, create it
        $admin_user = $this->settings->get_by( array('user' => 'admin') );
        if(count($admin_user) == 0) {
            $user_id = $this->authentication->create_user('admin', 'admin');
            $data = array('name' => 'Admin', 'email' => 'info@server.com', 'created_at' => date("Y-m-d H:i:s"));
            $this->settings->update($user_id, $data);
        }

        if ($this->input->post('submit')) {
            $user = $this->input->post('user');
            $pass = $this->input->post('password');

            if ($this->authentication->login($user, $pass)) {
                $user_id = $this->authentication->read('identifier');
                $user = $data = $this->settings->as_array()->get($user_id);

                $data['logged_in'] = true;
                $this->session->set_userdata($data);

                $user['last_login'] = date("Y-m-d H:i:s");
                $this->settings->update($user['id'], $user);

                redirect('admin', 'refresh');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Ouch!</strong> The username or password are incorrect. Review the data and try again.</div>');
                redirect('admin/login', 'refresh');
            }
        }

        $this->layout = 'admin/layouts/admin.php';
        $this->data['item'] = 'admin';
    }

    public function logout()
    {
        $this->authentication->logout();
        redirect('admin/login', 'refresh');
    }

}

/* End of file admin/login.php */
/* Location: ./application/controllers/admin/login.php */