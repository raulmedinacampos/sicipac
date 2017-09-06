<?php

class Representantes_md extends CI_Model {
	const tabla="REPRESENTANTES";
	
	function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	function GetAll() {
        $query = $this->db->get(self::tabla);
        return $query->result();
    }
	
	function GetTypes() {
    	$this->db->where('ACTIVO', 'S');
    	$query = $this->db->get('CATTIPOREPRESENTANTE');
    	return $query->result();
    }
    
    function GetAllAdmin() {
		$this->db->where('ACTIVO', 'S');
		$this->db->or_where('ACTIVO', 'N');
        $query = $this->db->get(self::tabla);
        return $query->result();
    }
    
	function GetById($id) {
		$this->db->where(array('IDREPRESENTANTE'=>$id));
        $query = $this->db->get(self::tabla);
        return $query->result_array();
    }

	function GetByProveedor($id) {
		$this->db->where("EXISTS(SELECT * FROM ".self::tabla." WHERE PROVEEDOR=".$id.")");
        $query = $this->db->get(self::tabla);
        return $query->result_array();
    }
	
    function InsertRecord($data) {
    	
    	$this->db->set('NOMBRE', $data[0]);
    	$this->db->set('APPATERNO', $data[1]);
    	$this->db->set('APMATERNO', $data[2]);
    	$this->db->set('TIPOREPRESENTANTE', $data[3]);
    	$this->db->set('FECHAINSERCION', "to_date('$data[4]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOINSERTO', $data[5]);
    	$this->db->set('ACTIVO', $data[6]);
		
        $this->db->insert(self::tabla,$this);
		
		//return $this->db->insert_id();
		return true;
    }
	
	function UpdateRecord($data,$id) {
		
    	$this->db->set('NOMBRE', $data[0]);
    	$this->db->set('APPATERNO', $data[1]);
    	$this->db->set('APMATERNO', $data[2]);
    	$this->db->set('TIPOREPRESENTANTE', $data[3]);
    	$this->db->set('FECHAMODIFICACION', "to_date('$data[4]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOMODIFICO', $data[5]);
    	$this->db->set('ACTIVO', $data[6]);

		$this->db->update(self::tabla, $this, array('IDREPRESENTANTE' => $id));
		
		return $id;
    }

    function Disable($id) {
    	$this->ACTIVO = 'N';

        $this->db->update(self::tabla, $this, array('IDREPRESENTANTE' => $id));
    }
	
    function Enable($id) {
    	$this->ACTIVO = 'S';

        $this->db->update(self::tabla, $this, array('IDREPRESENTANTE' => $id));
    }

    function Delete($id) {
    	$this->ACTIVO = 'E';

        $this->db->update(self::tabla, $this, array('IDREPRESENTANTE' => $id));
    }
}