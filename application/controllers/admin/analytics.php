<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Analytics extends MY_Controller
{

    protected $helpers = array( 'am', 'admin_language' );

    private $title = "Google Analytics";
    private $file = "analytics";

    public function __construct()
    {
        parent::__construct();
        if (!$this->authentication->is_loggedin('admin')) {
            $this->session->set_flashdata("alert_message", lang_phrase('alert_not_logged_in') );
            $this->session->set_flashdata("alert_type", "warning");
            redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        $this->layout = 'admin/layouts/admin.php';

        $this->data['title'] = $this->title;
        $this->data['file'] = $this->file;

        if(ADMIN_LANGUAGE == 'en') {
            $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
            $month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        } else if(ADMIN_LANGUAGE == 'es') {
            $days = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
            $month = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        }

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
        if(ADMIN_LANGUAGE == 'en') {
            $results[] = array('Date', 'Visits', 'New visits');
        } else if(ADMIN_LANGUAGE == 'es') {
            $results[] = array('Día', 'Visitas', 'Nuevas visitas');
        }

        foreach($ga as $day => $item) {
            $info = array();
            $iday = strtotime($day);
            $info[] = $days[date('w', $iday)] . ', ' . $month[date('n', $iday) - 1] . ' ' . date('j', $iday) . ', ' . date('Y', $iday);
            $info[] = intval($item['visits']);
            $info[] = intval($item['newVisits']);
            $results[] = $info;
        }

        $this->data['ga_results'] = json_encode($results);
        if(ADMIN_LANGUAGE == 'en') {
            $this->data['ga_title'] = "{$summary['metrics']['visits']} visits to the website during the last 31 days";
        } else if(ADMIN_LANGUAGE == 'es') {
            $this->data['ga_title'] = "{$summary['metrics']['visits']} visitas al sitio web en los últimos 31 días";
        }
    }

}

/* End of file admin/analytics.php */
/* Location: ./application/controllers/admin/analytics.php */