<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class Historia extends MY_Controller
{
	public function index()
	{
        $data=null;
        $this->load_layout('historia.html', array('data' => $data));
    }
}