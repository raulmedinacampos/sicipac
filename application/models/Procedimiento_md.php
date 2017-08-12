<?php
class Procedimiento_md extends CI_Model {
	public function GetOperationType() {
		$query = $this->db->select("IDTIPOLICITACION, TIPOLICITACION");
		$query = $this->db->where("ACTIVO","S");
		$query = $this->db->get("CATTIPOLICITACION");
		
		if ( $query->result() ) {
			return $query->result();
		}
	}
	
	public function GetProcType() {
		$query = $this->db->select("IDTIPOPROCEDIMIENTO, TIPOPROCEDIMIENTO");
		$query = $this->db->where("ACTIVO","S");
		$query = $this->db->get("CATTIPOPROCEDIMIENTO");
		
		if ( $query->result() ) {
			return $query->result();
		}
	}
	
	public function GetOrigenType() {
		$query = $this->db->select("IDORIGEN, ORIGEN");
		$query = $this->db->where("ACTIVO","S");
		$query = $this->db->get("CATORIGEN");
		
		if ( $query->result() ) {
			return $query->result();
		}
	}
}
?>