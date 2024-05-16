<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class Noticia extends MY_Controller
{	
	public function ver($id)
	{
        $data=$this->getNoticia($id);
		$this->load_layout('noticia', array('data' => $data[0]));
	}
	public function getNoticia($id){
        $this->load->model("admin_model");
        return $this->admin_model->getNoticiasId($id);		
	}
}
