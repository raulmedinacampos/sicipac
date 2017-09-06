<?php

class Rep_form_cont_md extends CI_Model {
	const tabla="REPRESENTANTESFORMACONTACTO";
	
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
	
    function InsertRecord($data) {
    	
    	$this->db->set('REPRESENTANTE', $data[0]);
    	$this->db->set('FORMACONTACTO', $data[1]);
    	$this->db->set('DESCRIPCION', $data[2]);
    	$this->db->set('FECHAINSERCION', "to_date('$data[3]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOINSERTO', $data[4]);
    	$this->db->set('ACTIVO', $data[5]);
		
        $this->db->insert(self::tabla,$this);
		
		//return $this->db->insert_id();
		return true;
    }
	
	function UpdateRecord($data,$id) {
		
    	$this->db->set('REPRESENTANTE', $data[0]);
    	$this->db->set('FORMACONTACTO', $data[1]);
    	$this->db->set('DESCRIPCION', $data[2]);
    	$this->db->set('FECHAMODIFICACION', "to_date('$data[3]', 'RRRR-MM-DD')",FALSE);
    	$this->db->set('USUARIOMODIFICO', $data[4]);
    	$this->db->set('ACTIVO', $data[5]);

		$this->db->update(self::tabla, $this, array('IDREPRESENTANTEFORMACONTACTO' => $id));
		
		return $id;
    }

    function Disable($id) {
    	$this->ACTIVO = 'N';

        $this->db->update(self::tabla, $this, array('IDREPRESENTANTEFORMACONTACTO' => $id));
    }
	
    function Enable($id) {
    	$this->ACTIVO = 'S';

        $this->db->update(self::tabla, $this, array('IDREPRESENTANTEFORMACONTACTO' => $id));
    }

    function Delete($id) {
    	$this->ACTIVO = 'E';

        $this->db->update(self::tabla, $this, array('IDREPRESENTANTEFORMACONTACTO' => $id));
    }
}