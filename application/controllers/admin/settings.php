<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller
{

    protected $helpers = array( 'am', 'admin_language' );

    protected $models = array( 'settings' );

    private $title = '';
    private $file = "settings";

    public function __construct()
    {
        parent::__construct();
        if (!$this->authentication->is_loggedin('admin')) {
            $this->session->set_flashdata("alert_message", lang_phrase('alert_not_logged_in') );
            $this->session->set_flashdata("alert_type", "warning");
            redirect(site_url('admin/login'));
        }

        $this->title = lang_phrase('manage_title');
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
            $info['permissions'] = (is_array($this->input->post('permissions'))) ? implode(",", $this->input->post('permissions')) : '';
            $info['created_at'] = date("Y-m-d H:i:s");

            $this->settings->update($user_id, $info);

            $this->session->set_flashdata("alert_message", lang_phrase('alert_create_success') );
            $this->session->set_flashdata("alert_type", "success");
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
            $info['permissions'] = (is_array($this->input->post('permissions'))) ? implode(",", $this->input->post('permissions')) : '';

            $this->settings->update($info['id'], $info);

            $this->session->set_flashdata("alert_message", lang_phrase('alert_edit_success') );
            $this->session->set_flashdata("alert_type", "success");
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

            $this->session->set_flashdata("alert_message", lang_phrase('alert_delete_success') );
            $this->session->set_flashdata("alert_type", "success");
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

        $this->data['title'] = lang_phrase('profile_title');
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
            $info['theme'] = $this->input->post('theme');

            $data = array();
            if($this->authentication->read('username') == 'admin' && ADMIN_MULTIUSER) {
                $data['permissions'] = $info['permissions'] = $this->input->post('permissions');
            }

            if($this->input->post('pass_new') == $this->input->post('pass_new_repeat')) {
                if($this->input->post('pass_new') != "") {
                    $this->authentication->change_password($this->input->post('pass_new'));
                }
            } else {
                $this->session->set_flashdata("alert_message", lang_phrase('alert_password_profile_wrong') );
                $this->session->set_flashdata("alert_type", "danger");
                redirect(base_url() . 'admin/' . $this->file . '/profile');
            }

            $this->settings->update($info['id'], $info);

            // update session info
            $data['name'] = $info['name'];
            $data['email'] = $info['email'];
            $data['theme'] = $info['theme'];
            $this->session->set_userdata($data);

            $this->session->set_flashdata("alert_message", lang_phrase('alert_edit_profile_success') );
            $this->session->set_flashdata("alert_type", "success");
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

        $this->session->set_flashdata("alert_message", lang_phrase('alert_cache_success') );
        $this->session->set_flashdata("alert_type", "success");
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function backup_db()
    {
        $this->layout = FALSE;
        $this->view = FALSE;

        // load mysql config
        $this->db = $this->load->database('export_db', TRUE);

        // create db backup
        $this->load->model('backupdb');
        $db_file = $this->backupdb->backup();

        // prepare and send email with link
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $domain = str_replace('www.', '', $_SERVER['HTTP_HOST']);
        $this->email->from('no-reply@' . $domain, ADMIN_PROJECT);
        $this->email->to($this->session->userdata('email'), $this->session->userdata('name'));
        $this->email->subject(ADMIN_PROJECT . ' : Database backup');
        $template = $this->load->view('admin/settings/email_db_backup', array('db_file' => $db_file), TRUE);
        $this->email->message($template);
        $var = $this->email->send();

        $this->session->set_flashdata("alert_message", lang_phrase('alert_db_backup_success') );
        $this->session->set_flashdata("alert_type", "success");
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function feedback_admin()
    {
        $this->layout = FALSE;
        $this->load->library('formulize');
        
        if ($this->input->post('form_submit')) {
            $info = array();
            $info['subject'] = $this->input->post('subject');
            $info['message'] = nl2br($this->input->post('message'));
            $info['user']    = $this->session->userdata('user');
            $info['name']    = $this->session->userdata('name');
            
            $admin_user = $this->settings->get_by( array('user' => 'admin') );

            // prepare and send email with link
            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $domain = str_replace('www.', '', $_SERVER['HTTP_HOST']);
            $this->email->from('no-reply@' . $domain, ADMIN_PROJECT);
            $this->email->to($admin_user->email, $admin_user->name);
            $this->email->subject('User feedback : ' . $info['subject']);
            $template = $this->load->view('admin/settings/email_feedback', $info, TRUE);
            $this->email->message($template);
            $var = $this->email->send();

            $this->session->set_flashdata("alert_message", lang_phrase('alert_feedback_success') );
            $this->session->set_flashdata("alert_type", "success");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function help()
    {
        $this->layout = 'admin/layouts/admin.php';
        $this->data['file'] = $this->file;
    }

}

/* End of file admin/settings.php */
/* Location: ./application/controllers/admin/settings.php */