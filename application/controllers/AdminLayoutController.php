<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class AdminLayoutController extends CI_Controller {
 
    function __construct() {        
        parent::__construct();
        $this->load->helper('url');        
    }
 
    public function load_layout($view, $params = null)
    {
        // Paso por parámetro la vista $view al layout y la muestro        
        $data = array();                
        $data['content'] = $this->load->view($view, $params, true);
        $this->load->view('admin/layout',$data, false);

    }
 
}