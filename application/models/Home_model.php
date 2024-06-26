<?php

class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

    function getTablaPosiciones($categoria_id)
    {
        $this->db->order_by('PTS', 'DESC');
        $this->db->order_by('DIF', 'DESC');
        $this->db->order_by('GF', 'DESC');
        $this->db->order_by('PG', 'DESC');
        $this->db->where('id_categoria',$categoria_id);
        $query = $this->db->get('v_tabla_posiciones');
        return $query->result();
    }
    function getCategorias()
    {
        $this->db->where('id_torneo',4);
        $query = $this->db->get('V_CategoriasTorneo');
        return $query->result();
    }
    function getComision()
    {
        $this->db->where('id_torneo',4);
        $query = $this->db->get('comision');
        return $query->result();
    }
    function getTorneo(){                     
        $query = $this->db->get('V_Torneo_Actual');
        return $query->result();
    }
    function getTorneosAnteriores(){                     
        $query = $this->db->get('V_Torneos_Anteriores');
        return $query->result();
    }
    function getSubCategorias($id_categoria)
    {
        $this->db->where('estado', 'A');
        $this->db->where('id_categoria', $id_categoria);
        $query = $this->db->get('categoriasxtorneo');
        return $query->result();

    }
    function getResultados($NRO_FECHA,$id_cat)
    {        
        $this->db->select("programacion.id,TIME_FORMAT(cast(hora as time), '%H:%i') 'hora', cl.descripcion 'equipo_local',cv.descripcion 'equipo_visita',fecha,result_local,result_visita,cl.logo 'logo_local',cv.logo 'logo_visita'");
        $this->db->join('club cl', 'programacion.id_club_local = cl.id');
        $this->db->join('club cv', 'programacion.id_club_visita = cv.id');
        $this->db->where('programacion.NRO_FECHA', $NRO_FECHA);    
        $this->db->where('programacion.id_subcat', $id_cat);        
        $this->db->where('programacion.estado', 'F');
        $query = $this->db->get('programacion');
        return $query->result();
    }
    function getResultadosCabecera($id_cat){
        $fechas=array($this->getUltimasFechas($id_cat));
        $fechas_aux=[];
        foreach($fechas as $row){
            foreach($row as $dato){
                $fechas_aux[]=$dato->NRO_FECHA;
            }                        
        }
        $this->db->distinct();
        $this->db->select("NRO_FECHA,fecha,id_subcat");
        $this->db->join('club cl', 'programacion.id_club_local = cl.id');
        $this->db->join('club cv', 'programacion.id_club_visita = cv.id');
        $this->db->where('id_subcat', $id_cat);
        $this->db->where('programacion.estado', 'F');
        if(count($fechas_aux)>0){$this->db->where_in('NRO_FECHA', $fechas_aux);}
        $query = $this->db->get('programacion');
        return $query->result();
    }
    function getUltimasFechas($id_cat){
        $this->db->limit(3);
        $this->db->distinct();
        $this->db->order_by('NRO_FECHA', 'DESC');
        $this->db->select("NRO_FECHA");        
        $this->db->where('id_subcat', $id_cat);
        $this->db->where('estado', 'F');
        $query = $this->db->get('programacion');
        return $query->result();
    }
    function getProximaFechasCabecera($id_cat){
        $fechas=array($this->getProximaFechas($id_cat));
        
        $fechas_aux=[];
        foreach($fechas as $row){
            foreach($row as $dato){
                $fechas_aux[]=$dato->NRO_FECHA;
            }                        
        }
        if(!count($fechas_aux)>0){
            return null;
        }
        $this->db->distinct();
        $this->db->select("NRO_FECHA,case fecha_jue when '1900-01-00' then fecha else fecha_jue end fecha_jue ,fecha,id_subcat");
        $this->db->from('programacion');
        $this->db->join('club cl', 'programacion.id_club_local = cl.id');
        $this->db->join('club cv', 'programacion.id_club_visita = cv.id');
        $this->db->where('id_subcat', $id_cat);
        $this->db->where('programacion.estado', 'A');
        // $this->db->where('fecha >=', date('Y-m-d'));
        // $this->db->or_where('fecha_jue >=', date('Y-m-d'));
        if(count($fechas_aux)>0){
            $this->db->where_in('NRO_FECHA', $fechas_aux);
        }          
        $sql_query= $this->db->get_compiled_select();     
        $query= $this->db->query($sql_query);          
        return $query->result();
    }
    function getFechaProximas($NRO_FECHA,$id_cat,$fecha)
    {        
        $this->db->select("programacion.id,TIME_FORMAT(cast(hora as time), '%H:%i') 'hora', cl.descripcion 'equipo_local',cv.descripcion 'equipo_visita',
        fecha,result_local,result_visita,cl.logo 'logo_local',cv.logo 'logo_visita',programacion.estado");
        $this->db->from('programacion');
        $this->db->join('club cl', 'programacion.id_club_local = cl.id');
        $this->db->join('club cv', 'programacion.id_club_visita = cv.id');
        $this->db->where('programacion.NRO_FECHA', $NRO_FECHA);    
        $this->db->where('programacion.id_subcat', $id_cat);   
        $this->db->where('programacion.estado', 'A');
        $this->db->where("(programacion.fecha='$fecha' or programacion.fecha_jue='$fecha')");
        // $this->db->or_where('fecha_jue >=', date('Y-m-d'));
        // $this->db->where('fecha >=', date('Y-m-d'));     
        // $query = $this->db->get('programacion');
        $sql_query= $this->db->get_compiled_select();  
        $query= $this->db->query($sql_query);          
        return $query->result();
    }
    function getProximaFechas($id_cat){
        //var_dump(date('Y-m-d'));exit;
        $this->db->limit(3);
        $this->db->distinct();
        $this->db->order_by('NRO_FECHA', 'ASC');
        $this->db->select("NRO_FECHA,estado");        
        $this->db->where('id_subcat', $id_cat);
        $this->db->where('programacion.estado', 'A');
        // $this->db->or_where('fecha_jue >=', date('Y-m-d'));
        // $this->db->where('fecha >=', date('Y-m-d'));
        $query = $this->db->get('programacion');
        
        return $query->result();
    }
    function getPartidoId($id_partido){
        $this->db->select("programacion.id,TIME_FORMAT(cast(hora as time), '%H:%i') 'hora',cp.descripcion 'estadio', cl.descripcion 'equipo_local',
        cv.descripcion 'equipo_visita',fecha,result_local,result_visita,cl.logo 'logo_local',cv.logo 'logo_visita',programacion.cj,programacion.observacion,
        programacion.fecha_jue");
        $this->db->join('club cl', 'programacion.id_club_local = cl.id');
        $this->db->join('club cv', 'programacion.id_club_visita = cv.id');
        $this->db->join('campos cp', 'programacion.id_local = cp.id','left');
        $this->db->where('programacion.id', $id_partido);        
        $query = $this->db->get('programacion');
        return $query->result();
    }
    function getEquipos($id_categoria){
        $this->db->select("cl.descripcion ,cl.logo,cl.id");
        $this->db->join("club cl" ,"cl.id=cc.id_club and cc.id_sub_cat='$id_categoria'");        
        $this->db->where('cc.id_sub_cat', $id_categoria);   
        $query = $this->db->get('categoriasxclub cc');
        return $query->result();
    }
    function getJugadoresEquipos($id_equipo,$id_categoria){
        // echo $id_categoria;exit;
        $this->db->select("j.*,pi.id_subcat,pi.id_club,c.descripcion,cg.descripcion 'posicion',c.logo,ct.categoria");
        $this->db->join("detalle_planilla_inscripcion dp","dp.id_planilla=pi.id");   
        $this->db->join("club c","c.id=pi.id_club");        
        $this->db->join("jugadores j","j.id=dp.id_jugador");
        $this->db->join("cargos cg","cg.id=j.id_posicion");   
        $this->db->join("categoriasxtorneo ct","ct.id=pi.id_subcat");           
        $this->db->where('pi.id_subcat', $id_categoria);        
        $this->db->where('pi.id_club', $id_equipo);        
        $query = $this->db->get('planilla_inscripcion pi');
        
        return $query->result();
    }
    function getResultadosFechas($id_cat){      
        $this->db->distinct();          
        $this->db->order_by('NRO_FECHA', 'ASC');
        $this->db->select("NRO_FECHA,fecha,id_subcat");        
        $this->db->where('id_subcat', $id_cat);
        $query = $this->db->get('programacion');
        return $query->result();
    }
    function getResultadosAll($nro_fecha,$id_categoria){
        $this->db->order_by('NRO_FECHA', 'ASC');
        $this->db->select("programacion.id,TIME_FORMAT(cast(hora as time), '%h:%i %p') 'hora', cl.descripcion 'equipo_local',cv.descripcion 'equipo_visita',fecha,result_local,result_visita,cl.logo 'logo_local',cv.logo 'logo_visita'");
        $this->db->join('club cl', 'programacion.id_club_local = cl.id');
        $this->db->join('club cv', 'programacion.id_club_visita = cv.id');
        $this->db->where('id_subcat', $id_categoria);  
        $this->db->where('NRO_FECHA', $nro_fecha);        
        $query = $this->db->get('programacion');
        return $query->result();
    }
    public function getFixtureCategoria($id_cat){
        $this->db->where('id_categoria', $id_cat); 
        $query = $this->db->get('v_torneoxcategoria');        
        return $query->result();
	}
}
