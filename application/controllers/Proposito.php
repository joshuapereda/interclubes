<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "MY_Controller.php";
class Proposito extends MY_Controller
{
	public function index()
	{
		$this->load_layout('proposito');
    }
}