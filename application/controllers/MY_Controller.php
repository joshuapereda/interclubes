<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

abstract class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function load_layout($view, $params = null)
    {
        $data = array();
        $data['content'] = $this->load->view($view, $params, true);
        $data['torneo'] = $this->getTorneo();  
        $data['torneosAnteriores'] = $this->home_model->getTorneosAnteriores();        
        $data['redes'] = $this->getRedes();                      
        $this->load->view('layout', $data, false);
    }
    public function getRedes()
    {
        $this->load->model('admin_model');
        $data = $this->admin_model->getRedes();
        return $data;
    }
    public function getTorneo()
    {        
        $this->load->model('home_model');
        $data = $this->home_model->getTorneo();
        return $data;
    }
    
    public function getFixtureCategoria($id_cat){
		$this->load->model('home_model');
        $data = $this->home_model->getFixtureCategoria($id_cat);        
        return $data;
	}
}
