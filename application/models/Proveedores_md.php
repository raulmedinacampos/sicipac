<?php

class Proveedores_md extends CI_Model {
	
	const tabla="PROVEEDORES";
	
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
		$this->db->where(array('IDPROVEEDOR'=>$id));
        $query = $this->db->get(self::tabla);
        return $query->result_array();
    }
	
    function InsertRecord($data) {
    	$data[5] = ($data[1] == "pf") ? trim($data[2]." ".$data[3]." ".$data[4]) : $data[5];    	
    	
    	$this->db->set('RFC', $data[0]);
    	$this->db->set('TIPOCONTRIBUYENTE', $data[1]);
    	$this->db->set('NOMBRE', $data[2]);
    	$this->db->set('APPATERNO', $data[3]);
    	$this->db->set('APMATERNO', $data[4]);
    	$this->db->set('RAZONSOCIAL', $data[5]);
    	$this->db->set('CALLE', $data[6]);
    	$this->db->set('NUMEXTERIOR', $data[7]);
    	$this->db->set('NUMINTERIOR', $data[8]);
    	$this->db->set('COLONIA', $data[9]);
    	$this->db->set('CODIGOPOSTAL', $data[10]);
    	$this->db->set('ENTIDAD', $data[11]);
    	$this->db->set('MUNICIPIO', $data[12]);
    	$this->db->set('FECHAINSERCION', "to_date('$data[13]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOINSERTO', $data[14]);
    	$this->db->set('ACTIVO', $data[15]);
		
        $this->db->insert(self::tabla,$this);
		
		//return $this->db->insert_id();
        return true;
    }
	
    function UpdateRecord($data,$id) {
    	$data[5] = ($data[1] == "pf") ? trim($data[2]." ".$data[3]." ".$data[4]) : $data[5];
    	
    	$this->db->set('RFC', $data[0]);
    	$this->db->set('TIPOCONTRIBUYENTE', $data[1]);
    	$this->db->set('NOMBRE', $data[2]);
    	$this->db->set('APPATERNO', $data[3]);
    	$this->db->set('APMATERNO', $data[4]);
    	$this->db->set('RAZONSOCIAL', $data[5]);
    	$this->db->set('CALLE', $data[6]);
    	$this->db->set('NUMEXTERIOR', $data[7]);
    	$this->db->set('NUMINTERIOR', $data[8]);
    	$this->db->set('COLONIA', $data[9]);
    	$this->db->set('CODIGOPOSTAL', $data[10]);
    	$this->db->set('ENTIDAD', $data[11]);
    	$this->db->set('MUNICIPIO', $data[12]);
    	$this->db->set('FECHAMODIFICACION', "to_date('$data[13]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOMODIFICO', $data[14]);
    	$this->db->set('ACTIVO', $data[15]);

		$this->db->update(self::tabla, $this, array('IDPROVEEDOR' => $id));
		
		return $id;
    }

    function Disable($id) {
    	$this->ACTIVO = 'N';

        $this->db->update(self::tabla, $this, array('IDPROVEEDOR' => $id));
    }
	
    function Enable($id) {
    	$this->ACTIVO = 'S';

        $this->db->update(self::tabla, $this, array('IDPROVEEDOR' => $id));
    }

    function Delete($id) {
        $this->ACTIVO = 'E';

        $this->db->update(self::tabla, $this, array('IDPROVEEDOR' => $id));
    }

}