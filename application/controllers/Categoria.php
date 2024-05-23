<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class Categoria extends MY_Controller
{
	function __construct()
    {
        parent::__construct();
		$this->load->model('categoria_model');
    }

	public function index()
	{
        $data= $this->categoria_model->getCategorias();  
		$this->load_layout('categorias', array('data' => $data));
    }
}