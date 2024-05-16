<?php

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }
    function getPublicacion()
    {
        $this->db->limit(3);
        $this->db->order_by('fecha', 'DESC');
        $query = $this->db->get('publicaciones');
        return $query->result();
    }
    function getPublicacionId($id)
    {
        $query =$this->db->get_where('publicaciones', array('id' => $id));        
        return $query->result();
    }
    function AddPublicacion($data)
    {
        return $this->db->insert('publicaciones', $data);
    }
    function getNoticias($id_cat)
    {
        $this->db->limit(3);
        $this->db->where('categoria',$id_cat);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('noticias');
        return $query->result();
    }
    function getNoticiasId($id)
    {
        $query =$this->db->get_where('noticias', array('id' => $id));        
        return $query->result();
    }
    function AddNoticia($data)
    {
        return $this->db->insert('noticias', $data);
    }
    function AddFixture($fixture,$id_cat)
    {
        $this->db->set('Fixture', $fixture);
        $this->db->where('id', $id_cat);
       return  $this->db->update('categorias');        
    }
    function AddLink($link,$link_id)
    {
        $this->db->set('url', $link);
        $this->db->where('id', $link_id);
       return  $this->db->update('links');        
    }
    function AddProximaFechas()
    {
        $query = $this->db->get('proximasfechas');
        return $query->result();
    }
    public function DeleteRedes()
    {        
        $this->db->empty_table('redes_sociales');
    }
    function getRedes()
    {
        $query = $this->db->get('redes_sociales');
        return $query->result();
    }
    function AddRedes($data)
    {
        return $this->db->insert('redes_sociales', $data);
    }
}
