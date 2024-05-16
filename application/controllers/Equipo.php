<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class Equipo extends MY_Controller
{
	public function index($id=null)
	{
		if ($id == null) {
			if ($this->session->userdata('id_cat')!==null) {
				$id = $this->session->userdata('id_cat');
			} else {
				$id = 1;
			}
		}
		$this->session->set_userdata('id_cat', $id);
		$data=$this->getEquipos($id);		
		$this->load_layout('equipos', array('data' => $data));
	}
	public function ver($id=1)
	{		
		$id_categoria=$this->session->userdata('id_cat');		
		$data=$this->getEquiposJugadores($id,$id_categoria);		
		$this->load_layout('jugadores', array('data' => $data));
	}
	function getEquipos($id_categoria){
		$this->load->model('home_model');
		$data=$this->home_model->getEquipos($id_categoria);
		return $data;
	}
	function getEquiposJugadores($id_equipo,$id_categoria){
		$this->load->model('home_model');
		$data=$this->home_model->getJugadoresEquipos($id_equipo,$id_categoria);
		return $data;
	}
}