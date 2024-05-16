<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login  extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    
    public function index()
    {
        //$this->load->helper('url');
        $data = null;
        //$this->load->view('login', $data);
        $this->load->view('login', $data);
    }
}
