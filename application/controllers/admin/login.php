<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{

    protected $models = array( 'settings' );

    public function index()
    {
        if ($this->session->userdata('logged_in') == TRUE) {
            redirect('admin');
        }

        // if admin user does not exists, create it
        $admin_user = $this->settings->get_by( array('user' => 'admin') );
        if(count($admin_user) == 0) {
            $user_id = $this->authentication->create_user('admin', 'admin');
            $data = array('name' => 'Admin', 'email' => ADMIN_PRIMARY_EMAIL, 'created_at' => date("Y-m-d H:i:s"));
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

                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Ouch!</strong> The username or password are incorrect. Review the data and try again.</div>');
                redirect('admin/login');
            }
        }

        $this->layout = 'admin/layouts/admin.php';
        $this->data['item'] = 'admin';
    }

    public function logout()
    {
        $this->authentication->logout();
        redirect('admin/login');
    }

    public function forgot_password()
	{
		if($this->input->post('submit')) {
			$user = $this->input->post('user');

			if(empty($user)) {
                $this->session->set_flashdata('message', '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Hey!</strong> Please provide a valid username.</div>');
                redirect('admin/login/forgot-password');
			}

			if($user_reset = $this->settings->get_by( array( 'visible' => 1, 'user' => $user ) )) {
				$this->load->helper('string');
				$user_reset->reset_token = random_string('alnum', 64);
				$this->settings->update($user_reset->id, $user_reset);

				$this->load->library('email');
                $config['mailtype'] = 'html';
                $this->email->initialize($config);

				$domain = str_replace('www.', '', $_SERVER['HTTP_HOST']);
                $this->email->from('no-reply@' . $domain, ADMIN_PROJECT . ' team');
                $this->email->to($user_reset->email, $user_reset->name);

                $this->email->subject('[' . ADMIN_PROJECT . '] Reset my password');
                $template = $this->load->view('admin/login/email_template', $user_reset, TRUE);
                $this->email->message($template);

                $var = $this->email->send();

                $this->session->set_flashdata('message', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Sent!</strong> In a few minutes you\'ll receive an email with info to reset your password.</div>');
                redirect('admin/login/forgot-password');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Ouch!</strong> We don\'t have that username in our system.</div>');
                redirect('admin/login/forgot-password');
			}
		}

		$this->layout = 'admin/layouts/admin.php';
		$this->data['item'] = 'admin';
    }

    public function reset_password($hash = '')
	{
		if(empty($hash)) {
			redirect('admin/login');
		}

		if($this->input->post('submit')) {
			$password1 = $this->input->post('password1');
			$password2 = $this->input->post('password2');
			$user_id = $this->input->post('user_id');
			
			if( !empty($password1) && ($password1 == $password2) ) {
				$user = $this->settings->get( $user_id );
                $user->reset_token = NULL;
				$this->settings->update($user_id, $user);
				$this->authentication->change_password($password1, $user_id);
				
	            $this->session->set_flashdata('message', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Hooray!</strong> You have saved a new password!</div>');
	            redirect('admin/login');
			} else {
	            $this->session->set_flashdata('message', '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Ouch!</strong> Please provide a valid password.</div>');
	            redirect('admin/login/reset-password/' . $hash);
			}
		}

		if($user_reset = $this->settings->get_by( array( 'visible' => 1, 'reset_token' => $hash ) )) {
			$this->layout = 'admin/layouts/admin.php';
			$this->data['item'] = 'admin';
			$this->data['name'] = $user_reset->name;
			$this->data['user'] = $user_reset->user;
			$this->data['user_id'] = $user_reset->id;
		} else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Ouch!</strong> Invalid password reset value.</div>');
            redirect('admin/login');
		}
	}

}

/* End of file admin/login.php */
/* Location: ./application/controllers/admin/login.php */