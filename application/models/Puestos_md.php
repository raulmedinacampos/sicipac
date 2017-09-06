<?php

class Puestos_md extends CI_Model {
	const tabla="CATPUESTO";
	
	function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	function GetAll() {
        $query = $this->db->get(self::tabla);
        return $query->result();
    }
    
    function GetAllAdmin() {
    	$this->db->where('ACTIVO != ', 'E');
        $query = $this->db->get(self::tabla);
        return $query->result();
    }
    
	function GetById($id) {
		$this->db->where(array('IDPUESTO'=>$id));
        $query = $this->db->get(self::tabla);
        return $query->result_array();
    }
	
    function GetAllActives() {
    	$this->db->where('ACTIVO', 'S');
    	$query = $this->db->get(self::tabla);
    	return $query->result();
    }
	
    function InsertRecord($data) {
        $this->db->set('PUESTO', $data[0]);
    	$this->db->set('FECHAINSERCION', "to_date('$data[1]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOINSERTO', $data[2]);
    	$this->db->set('ACTIVO', $data[3]);
		
        $this->db->insert(self::tabla,$this);
		
		//return $this->db->insert_id();
		return true;
    }
	
	function UpdateRecord($data,$id) {
        $this->db->set('PUESTO', $data[0]);
    	$this->db->set('FECHAMODIFICACION', "to_date('$data[1]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOMODIFICO', $data[2]);
    	$this->db->set('ACTIVO', $data[3]);

		$this->db->update(self::tabla, $this, array('IDPUESTO' => $id));
		
		return $id;
    }

    function Disable($id) {
    	$this->ACTIVO = 'N';

        $this->db->update(self::tabla, $this, array('IDPUESTO' => $id));
    }
	
    function Enable($id) {
    	$this->ACTIVO = 'S';

        $this->db->update(self::tabla, $this, array('IDPUESTO' => $id));
    }

    function Delete($id) {
    	$this->ACTIVO = 'E';

        $this->db->update(self::tabla, $this, array('IDPUESTO' => $id));
    }
}