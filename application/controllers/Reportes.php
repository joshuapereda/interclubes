<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Reportes extends CI_Controller {
 
    public function index($id_equipo,$id_categoria)
    {
        $this->load->helper('url');
        $data['data']=$this->getEquiposJugadores($id_equipo,$id_categoria);        
        $mpdf = new \Mpdf\Mpdf();        	
        $mpdf->SetTitle($data['data'][0]->descripcion);	        
        $html=$this->load->view('reportes/jugadores',$data,true);        
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser        
    }
    function getEquiposJugadores($id_equipo,$id_categoria){
		$this->load->model('home_model');
		$data=$this->home_model->getJugadoresEquipos($id_equipo,$id_categoria);
		return $data;
	}

 
}