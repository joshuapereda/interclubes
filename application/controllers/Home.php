<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class Home extends MY_Controller
{
	public function index($id = null)
	{
		if ($id == null) {
			if ($this->session->userdata('id_cat')!==null) {
				$id = $this->session->userdata('id_cat');
			} else {
				$id = 1;
			}
		}
			$this->session->set_userdata('id_cat', $id);
			$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
			('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
			$this->output->set_header('Pragma: no-cache');
			$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
			$this->load->model('home_model');
			$data['tabla'] = $this->home_model->getTablaPosiciones($id);
			$data['publicacion'] = $this->getPublicacion();
			$data['noticia'] = $this->getNoticia($id);
			$data['resultados_cabecera'] = $this->getResultadosCabecera($id);
			$data['ProximaFechasCabecera'] = $this->getProximaFechasCabecera($id);			
			$this->load_layout('home', array('data' => $data));
		}

	public function getFechaProximas ($id,$id_cat,$fecha){
		$this->load->model('home_model');
		$data = $this->home_model->getFechaProximas ($id,$id_cat,$fecha);
		return $data;
	}
	
	public function getProximaFechasCabecera($id_cat){
		$this->load->model('home_model');
		$data = $this->home_model->getProximaFechasCabecera($id_cat);
		return $data;
	}
	public function getResultados ($id,$id_cat){
		$this->load->model('home_model');
		$data = $this->home_model->getResultados ($id,$id_cat);
		return $data;
	}
	public function getResultadosCabecera($id_cat){
		$this->load->model('home_model');
		$data = $this->home_model->getResultadosCabecera($id_cat);
		return $data;
	}
	public function getPublicacion()
	{
		$this->load->model('admin_model');
		$data = $this->admin_model->getPublicacion();
		return $data;
	}
	public function getNoticia($id_cat)
	{
		$this->load->model('admin_model');
		$data = $this->admin_model->getNoticias($id_cat);
		return $data;
	}
	function obtenerFechaEnLetra($fecha)
	{
		$dia = $this->conocerDiaSemanaFecha($fecha);
		$num = date("j", strtotime($fecha));
		$anno = date("Y", strtotime($fecha));
		$mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
		$mes = $mes[(date('m', strtotime($fecha)) * 1) - 1];
		return $dia . ', ' . $num . ' de ' . $mes . ' del ' . $anno;
	}
	function conocerDiaSemanaFecha($fecha)
	{
		$dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
		$dia = $dias[date('w', strtotime($fecha))];
		return $dia;
	}
}
