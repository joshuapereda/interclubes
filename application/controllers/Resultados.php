<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class Resultados extends MY_Controller
{	
	public function index($id_categoria=null)
	{
        if ($id_categoria == null) {
			if ($this->session->userdata('id_cat')!==null) {
				$id_categoria = $this->session->userdata('id_cat');
			} else {
				$id_categoria = 1;
			}
		}
        $this->session->set_userdata('id_cat', $id_categoria);                
        $data=$this->getResultadosFechas($id_categoria);
		$this->load_layout('resultados', array('data' => $data));
    }
    public function getResultadosFechas($id){
        $this->load->model("home_model");
        return $this->home_model->getResultadosFechas($id);		
	}
	public function getResultadosAll($nro_fecha,$id){
        $this->load->model("home_model");
        return $this->home_model->getResultadosAll($nro_fecha,$id);		
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
