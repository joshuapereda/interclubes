<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class Partido extends MY_Controller
{	
	public function index()
	{
		// $this->load->model('home_model');
        // $data = $this->home_model->getTablaPosiciones();
        $data=null;
		$this->load_layout('partido', array('data' => $data));
		//$this->load->view('home', $data);
    }
    
    public function resumen($id_partido){
        $data=$this->getPartidoId($id_partido);
		$this->load_layout('partido/resumen', array('data' => $data));
    }
    function getPartidoId($id_partido){
        $this->load->model("home_model");
        return $this->home_model->getPartidoId($id_partido);		
    }
}
