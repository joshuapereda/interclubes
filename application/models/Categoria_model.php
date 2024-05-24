<?php

class Categoria_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

  function getCategorias()
    {
        $query = $this->db->get('v_Torneo_Actual_Categorias');
        return $query->result();
    }

    function getEquiposPorCategoria($id_categoria){
        $this->db->where('id_categoria',$id_categoria);
        $query = $this->db->get('v_Torneo_Actual_Club_Categorias');
        return $query->result();
    }
    
}