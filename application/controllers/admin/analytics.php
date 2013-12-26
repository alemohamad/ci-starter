<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Analytics extends MY_Controller
{

    protected $helpers = array( 'am' );

    private $title = "Google Analytics";
    private $file = "analytics";

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
        $this->layout = 'admin/layouts/admin.php';

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;

        $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        $month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

        $this->load->library('ga_api');

        $ga = $this->ga_api->login()
                           ->dimension('date')
                           ->metric('visits, newVisits')
                           ->limit(31)
                           ->sort_by('date', true)
                           ->get_array();

        $summary = $ga['summary'];
        unset($ga['summary']);

        $results = array();
        $results[] = array('Date', 'Visits', 'New visits');

        foreach($ga as $day => $item) {
            $info = array();
            $iday = strtotime($day);
            $info[] = $days[date('w', $iday)] . ', ' . $month[date('n', $iday) - 1] . ' ' . date('j', $iday) . ', ' . date('Y', $iday);
            $info[] = intval($item['visits']);
            $info[] = intval($item['newVisits']);
            $results[] = $info;
        }

        $this->data['ga_results'] = json_encode($results);
        $this->data['ga_title'] = "{$summary['metrics']['visits']} visits to the website during the last 31 days";
    }

}

/* End of file admin/analytics.php */
/* Location: ./application/controllers/admin/analytics.php */