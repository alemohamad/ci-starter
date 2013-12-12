<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->authentication->is_loggedin()) {
            redirect(site_url('admin/login'));
        } else {
            // redirect to the first section
            redirect(site_url('admin/news'));
        }
    }

    public function index()
    {
        $this->layout = 'admin/layouts/admin.php';
        $this->data['item'] = 'admin';
    }

}

/* End of file admin/home.php */
/* Location: ./application/controllers/admin/home.php */