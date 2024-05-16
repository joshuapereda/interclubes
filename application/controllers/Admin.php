<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "AdminLayoutController.php";
class Admin extends AdminLayoutController
{
    public function index()
    {
        $data = null;
        //$this->load->view('login', $data);
        $this->load_layout('admin/dashboard', array('data' => $data));
    }
    public function getCategorias()
    {
        $this->load->model('home_model');
        $data = $this->home_model->getCategorias();
        return $data;
    }
    public function noticias()
    {
        //$this->load->helper('url');
        $data =$this->getCategorias();
        //$this->load->view('login', $data);
        $this->load_layout('admin/noticias', array('data' => $data));
    }
    public function publicaciones()
    {
        //$this->load->helper('url');
        $data = null;
        //$this->load->view('login', $data);
        $this->load_layout('admin/publicaciones', array('data' => $data));
    }
    public function redes()
    {
        //$this->load->helper('url');
        $data = $this->getRedes();
        //$this->load->view('login', $data);
        $this->load_layout('admin/redes', array('data' => $data));
    }
    public function fixture()
    {
        //$this->load->helper('url');
        $data =$this->getCategorias();
        //$this->load->view('login', $data);
        $this->load_layout('admin/fixture', array('data' => $data));
    }
    public function bases()
    {
        //$this->load->helper('url');
        $data =$this->getCategorias();
        //$this->load->view('login', $data);
        $this->load_layout('admin/bases', array('data' => $data));
    }
    public function juntas()
    {
        //$this->load->helper('url');
        $data =$this->getCategorias();
        //$this->load->view('login', $data);
        $this->load_layout('admin/juntas', array('data' => $data));
    }
    public function getPublicacion()
    {
        $this->load->model('admin_model');
        $data = $this->admin_model->getPublicacion();
        return $data;
    }
    public function getNoticias()
    {
        $this->load->model('admin_model');
        $data = $this->admin_model->getNoticias();
        return $data;
    }
    public function getRedes()
    {
        $this->load->model('admin_model');
        $data = $this->admin_model->getRedes();
        return $data;
    }
    function AddPublicacion()
    {        
        $data["imagen"]=base_url()."uploads/publicaciones/".$_FILES['imagen']['name'];
        $data["texto"]=$_POST['texto'];
        $data["titulo"]=$_POST['titulo'];
        var_dump($data);
        $this->load->model("admin_model");
        $this->admin_model->AddPublicacion($data);
        move_uploaded_file($_FILES['imagen']['tmp_name'], 'uploads/publicaciones/' . $_FILES['imagen']['name']);                        
    }
    function AddNoticias()
    {        
        $data["imagen"]=base_url()."uploads/noticias/".$_FILES['imagen']['name'];
        $data["texto"]=$_POST['texto'];
        $data["titulo"]=$_POST['titulo'];
        $data["categoria"]=$_POST['categoria'];
        var_dump($data);
        $this->load->model("admin_model");
        $this->admin_model->AddNoticia($data);
        move_uploaded_file($_FILES['imagen']['tmp_name'], 'uploads/noticias/' . $_FILES['imagen']['name']);                        
    }
    function AddRedes()
    {                
        $data=$_POST;      
        $this->load->model("admin_model");
        $this->admin_model->DeleteRedes();
        foreach($data as $row){
            $link['link']=$row;
            $this->admin_model->AddRedes($link);  
        }              
    }
    function AddFixture()
    {                
        $fixture=base_url()."uploads/fixture/".$_FILES['fixture']['name'];
        $categoria=$_POST['categoria'];
        $this->load->model("admin_model");
        $this->admin_model->AddFixture($fixture,$categoria);      
        move_uploaded_file($_FILES['fixture']['tmp_name'], 'uploads/fixture/' . $_FILES['fixture']['name']);                                    
    }
    function AddLink()
    {   
        $link_id=$_POST['link_id'];             
        if($link_id==1){$folder="bases";}
        if($link_id==2){$folder="junta_directiva";}
        $link=base_url()."uploads/".$folder."/".$_FILES['link']['name'];
        
        $this->load->model("admin_model");
        $this->admin_model->AddLink($link,$link_id);      
        move_uploaded_file($_FILES['link']['tmp_name'], 'uploads/'.$folder.'/' . $_FILES['link']['name']);                                    
    }
}
