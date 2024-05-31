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

    function getEquiposPorCategoria($id_categoria)
    {
        $this->db->where('id_categoria', $id_categoria);
        $query = $this->db->get('v_Torneo_Actual_Club_Categorias');
        return $query->result();
    }

    function getJugadoresPorEquipo($id_equipo,$id_subcat)
    {
        $this->db->where('id_club', $id_equipo);
        $this->db->where('id_subcat', $id_subcat);
        $query = $this->db->get('v_planillas_inscripcion');
        return $query->result();
    }
}
