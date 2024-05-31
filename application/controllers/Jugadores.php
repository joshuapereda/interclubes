<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class Jugadores extends MY_Controller
{
	function __construct()
    {
        parent::__construct();
		$this->load->model('categoria_model');
    }

	public function index()
	{ 
		$id_equipo = $_GET["id_equipo"];
		$id_subcat = $_GET["id_subcat"];
		$data= $this->categoria_model->getJugadoresPorEquipo($id_equipo,$id_subcat); 			
		$this->load_layout('jugadores', array('data' => $data));		
    }

}