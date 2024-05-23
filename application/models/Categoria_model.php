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
        $this->db->where('id_torneo',4);
        $query = $this->db->get('V_CategoriasTorneo');
        return $query->result();
    }

    function getEquiposPorCategoria($id_categoria){
        $this->db->where('id_categoria',$id_categoria);
        $query = $this->db->get('v_Torneo_Actual_Club_Categorias');
        return $query->result();
    }
    
}