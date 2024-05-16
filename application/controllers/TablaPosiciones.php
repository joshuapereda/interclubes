<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class TablaPosiciones extends MY_Controller
{
	public function index()
	{
		$this->load->model('home_model');
		$categorias=$this->home_model->getCategorias();
		$comision=$this->home_model->getComision();
		$this->load_layout('tablaPosiciones', array('categorias' => $categorias,'comision'=>$comision));
    }
	public function getTablePosicion($categoria_id){
		$this->load->model('home_model');
		$tablaPosiciones=$this->home_model->getTablaPosiciones($categoria_id);
		return $tablaPosiciones;
	}
}