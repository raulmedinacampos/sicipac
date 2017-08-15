<?php

class Areas_md extends CI_Model {
	
	const tabla="CATAREA";
	
	function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	function GetAll() {
        $query = $this->db->get(self::tabla);
        return $query->result();
    }
    
	function GetAllAdmin() {
		$this->db->where('ACTIVO', 'S');
		$this->db->or_where('ACTIVO', 'N');
        $query = $this->db->get(self::tabla);
        return $query->result();
    }
    
    function GetAllActives() {
    	$this->db->where('ACTIVO', 'S');
    	$query = $this->db->get(self::tabla);
    	return $query->result();
    }
    
    function GetById($id) {
		$this->db->where(array('IDAREA'=>$id));
        $query = $this->db->get(self::tabla);
        return $query->result_array();
    }
	
    function InsertRecord($data) {
        /*$this->SIGLAS   = $data[0];
        $this->AREA = $data[1];
        $this->AREAPADRE = $data[2];
        $this->DESCRIPCION    = $data[3];
        $this->FECHAINSERCION    = $data[4];
        $this->USUARIOINSERTO    = $data[5];
        $this->ACTIVO    = $data[6];*/
    	
    	$this->db->set('SIGLAS', $data[0]);
    	$this->db->set('AREA', $data[1]);
    	$this->db->set('AREAPADRE', $data[2]);
    	$this->db->set('DESCRIPCION', $data[3]);
    	$this->db->set('FECHAINSERCION', "to_date('$data[4]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOINSERTO', $data[5]);
    	$this->db->set('ACTIVO', $data[6]);
		
        $this->db->insert(self::tabla,$this);
		
		//return $this->db->insert_id();
        return true;
    }
	
    function UpdateRecord($data,$id) {
        /*$this->SIGLAS   = $data[0];
        $this->AREA = $data[1];
        $this->AREAPADRE = $data[2];
        $this->DESCRIPCION    = $data[3];
        $this->FECHAMODIFICACION    = $data[4];
        $this->USUARIOMODIFICO    = $data[5];
        $this->ACTIVO    = $data[6];*/
    	
    	$this->db->set('SIGLAS', $data[0]);
    	$this->db->set('AREA', $data[1]);
    	$this->db->set('AREAPADRE', $data[2]);
    	$this->db->set('DESCRIPCION', $data[3]);
    	$this->db->set('FECHAMODIFICACION', "to_date('$data[4]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOMODIFICO', $data[5]);
    	$this->db->set('ACTIVO', $data[6]);

		$this->db->update(self::tabla, $this, array('IDAREA' => $id));
		
		return $id;
    }

    function Disable($id) {
    	$this->ACTIVO = 'N';

        $this->db->update(self::tabla, $this, array('IDAREA' => $id));
    }
	
    function Enable($id) {
    	$this->ACTIVO = 'S';

        $this->db->update(self::tabla, $this, array('IDAREA' => $id));
    }

    function Delete($id) {
        $this->ACTIVO = 'E';

        $this->db->update(self::tabla, $this, array('IDAREA' => $id));
    }

}