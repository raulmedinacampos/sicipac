<?php

class Usuarios_md extends CI_Model {
	
	const tabla="USUARIOS";
	
	function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	function GetAll() {
        $query = $this->db->get(self::tabla);
        return $query->result();
    }
    
	function GetAllAdmin() {
		$this->db->where('IDUSUARIO != ', 1);
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
		$this->db->where(array('IDUSUARIO'=>$id));
        $query = $this->db->get(self::tabla);
        return $query->result_array();
    }
	
    function InsertRecord($data) {
    	
    	$this->db->set('NOMBREUSUARIO', $data[0]);
    	$this->db->set('PASSWORD', $data[1]);
    	$this->db->set('NUMEMPLEADO', $data[2]);
    	$this->db->set('PUESTO', $data[3]);
    	$this->db->set('AREA', $data[4]);
    	$this->db->set('NOMBRE', $data[5]);
    	$this->db->set('APPATERNO', $data[6]);
    	$this->db->set('APMATERNO', $data[7]);
    	$this->db->set('EXTENSION', $data[8]);
    	$this->db->set('CORREO', $data[9]);
    	$this->db->set('FECHAINSERCION', "to_date('$data[10]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOINSERTO', $data[11]);
    	$this->db->set('ACTIVO', $data[12]);
		
        $this->db->insert(self::tabla,$this);
		
		//return $this->db->insert_id();
        return true;
    }
	
    function UpdateRecord($data,$id) {
    	
    	$this->db->set('NOMBREUSUARIO', $data[0]);
    	$this->db->set('PASSWORD', $data[1]);
    	$this->db->set('NUMEMPLEADO', $data[2]);
    	$this->db->set('PUESTO', $data[3]);
    	$this->db->set('AREA', $data[4]);
    	$this->db->set('NOMBRE', $data[5]);
    	$this->db->set('APPATERNO', $data[6]);
    	$this->db->set('APMATERNO', $data[7]);
    	$this->db->set('EXTENSION', $data[8]);
    	$this->db->set('CORREO', $data[9]);
    	$this->db->set('FECHAMODIFICACION', "to_date('$data[10]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOMODIFICO', $data[11]);
    	$this->db->set('ACTIVO', $data[12]);

		$this->db->update(self::tabla, $this, array('IDUSUARIO' => $id));
		
		return $id;
    }

    function Disable($id) {
    	$this->ACTIVO = 'N';

        $this->db->update(self::tabla, $this, array('IDUSUARIO' => $id));
    }
	
    function Enable($id) {
    	$this->ACTIVO = 'S';

        $this->db->update(self::tabla, $this, array('IDUSUARIO' => $id));
    }

    function Delete($id) {
        $this->ACTIVO = 'E';

        $this->db->update(self::tabla, $this, array('IDUSUARIO' => $id));
    }

}