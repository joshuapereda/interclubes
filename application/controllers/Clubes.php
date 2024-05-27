<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class Clubes extends MY_Controller
{
	function __construct()
    {
        parent::__construct();
		$this->load->model('categoria_model');
    }

	public function index()
	{
		$id_categoria = $_GET["id_categoria"];
		$data= $this->categoria_model->getEquiposPorCategoria($id_categoria);  
		$this->load_layout('clubes', array('data' => $data));
    }
}