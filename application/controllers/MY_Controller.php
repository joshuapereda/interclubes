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
        // Paso por parámetro la vista $view al layout y la muestro       

        if ($this->session->userdata('id_cat')!==null) {
            $id = $this->session->userdata('id_cat');            
        } else {
            $id = 1;
        }       
        $data = array();
        $data['content'] = $this->load->view($view, $params, true);
        $data['torneo'] = $this->getTorneo();
        
        $data['redes'] = $this->getRedes();         
        $this->session->set_userdata('categoria', $this->getCategoriasId($id));
        $data['fixture'] = $this->getFixtureCategoria($id);        
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
    public function getTorneoId($id_torneo)
    {        
        $this->load->model('home_model');
        $data = $this->home_model->getTorneoId($id_torneo);
        return $data;
    }
    public function getCategorias($id_torneo)
    {        
        
        $this->session->set_userdata('id_torneo', $id_torneo);        
        $this->load->model('home_model');
        $data = $this->home_model->getCategorias_ult($id_torneo);                
        return $data;
    }
    public function getCategoriasId($id)
    {        
        $this->load->model('home_model');
        $data = $this->home_model->getCategoriasId($id);
        if(count($data)==0){return "";}
        if(is_null($data[0])){ return "";}
        $torneo_data = $this->getTorneoId($data[0]->id_torneo);        
        $this->session->set_userdata('torneo', $torneo_data[0]->nombre);               
        return $data[0]->categoria;
    }

    public function getSubCategorias($id_cat)
    {        
        $this->load->model('home_model');
        $data = $this->home_model->getSubCategorias($id_cat);        
        return $data;
    }

    
    public function getFixtureCategoria($id_cat){
		$this->load->model('home_model');
        $data = $this->home_model->getFixtureCategoria($id_cat);        
        return $data;
	}
}
