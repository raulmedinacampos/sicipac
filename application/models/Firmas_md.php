<?php

class Firmas_md extends CI_Model {
	const tabla="FIRMAS";
	
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
		$this->db->where(array('IDFIRMA'=>$id));
        $query = $this->db->get(self::tabla);
        return $query->result_array();
    }
	
    function InsertRecord($data) {
    	$this->db->set('TITULO', $data[0]);
    	$this->db->set('NOMBRE', $data[1]);
    	$this->db->set('APPATERNO', $data[2]);
    	$this->db->set('APMATERNO', $data[3]);
    	$this->db->set('PUESTO', $data[4]);
    	$this->db->set('FECHAINSERCION', "to_date('$data[5]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOINSERTO', $data[6]);
    	$this->db->set('ACTIVO', $data[7]);
		
        $this->db->insert(self::tabla,$this);
		
		//return $this->db->insert_id();
		return true;
    }
	
	function UpdateRecord($data,$id) {
    	$this->db->set('TITULO', $data[0]);
    	$this->db->set('NOMBRE', $data[1]);
    	$this->db->set('APPATERNO', $data[2]);
    	$this->db->set('APMATERNO', $data[3]);
    	$this->db->set('PUESTO', $data[4]);
    	$this->db->set('FECHAMODIFICACION', "to_date('$data[5]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOMODIFICO', $data[6]);
    	$this->db->set('ACTIVO', $data[7]);

		$this->db->update(self::tabla, $this, array('IDFIRMA' => $id));
		
		return $id;
    }

    function Disable($id) {
    	$this->ACTIVO = 'N';

        $this->db->update(self::tabla, $this, array('IDFIRMA' => $id));
    }
	
    function Enable($id) {
    	$this->ACTIVO = 'S';

        $this->db->update(self::tabla, $this, array('IDFIRMA' => $id));
    }

    function Delete($id) {
    	$this->ACTIVO = 'E';

        $this->db->update(self::tabla, $this, array('IDFIRMA' => $id));
    }
}