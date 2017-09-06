<?php

class Unidades_resp_md extends CI_Model {
	
	const tabla="CATUNIRESPONSABLE";
	
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
    
    function GetAllActives() {
    	$this->db->where('ACTIVO', 'S');
    	$query = $this->db->get(self::tabla);
    	return $query->result();
    }
    
    function GetById($id) {
		$this->db->where(array('IDUNIRESPONSABLE'=>$id));
        $query = $this->db->get(self::tabla);
        return $query->result_array();
    }
	
    function InsertRecord($data) {
    	
    	$this->db->set('CLAVE', $data[0]);
    	$this->db->set('SIGLAS', $data[1]);
    	$this->db->set('UNIRESPONSABLE', $data[2]);
    	$this->db->set('CALLE', $data[3]);
    	$this->db->set('NUMEXTERIOR', $data[4]);
    	$this->db->set('NUMINTERIOR', $data[5]);
    	$this->db->set('COLONIA', $data[6]);
    	$this->db->set('CODIGOPOSTAL', $data[7]);
    	$this->db->set('ENTIDAD', $data[8]);
    	$this->db->set('MUNICIPIO', $data[9]);
    	$this->db->set('FECHAINSERCION', "to_date('$data[10]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOINSERTO', $data[11]);
    	$this->db->set('ACTIVO', $data[12]);
		
        $this->db->insert(self::tabla,$this);
		
		//return $this->db->insert_id();
        return true;
    }
	
    function UpdateRecord($data,$id) {
    	$this->db->set('CLAVE', $data[0]);
    	$this->db->set('SIGLAS', $data[1]);
    	$this->db->set('UNIRESPONSABLE', $data[2]);
    	$this->db->set('CALLE', $data[3]);
    	$this->db->set('NUMEXTERIOR', $data[4]);
    	$this->db->set('NUMINTERIOR', $data[5]);
    	$this->db->set('COLONIA', $data[6]);
    	$this->db->set('CODIGOPOSTAL', $data[7]);
    	$this->db->set('ENTIDAD', $data[8]);
    	$this->db->set('MUNICIPIO', $data[9]);
    	$this->db->set('FECHAMODIFICACION', "to_date('$data[10]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOMODIFICO', $data[11]);
    	$this->db->set('ACTIVO', $data[12]);

		$this->db->update(self::tabla, $this, array('IDUNIRESPONSABLE' => $id));
		
		return $id;
    }

    function Disable($id) {
    	$this->ACTIVO = 'N';

        $this->db->update(self::tabla, $this, array('IDUNIRESPONSABLE' => $id));
    }
	
    function Enable($id) {
    	$this->ACTIVO = 'S';

        $this->db->update(self::tabla, $this, array('IDUNIRESPONSABLE' => $id));
    }

    function Delete($id) {
        $this->ACTIVO = 'E';

        $this->db->update(self::tabla, $this, array('IDUNIRESPONSABLE' => $id));
    }

}