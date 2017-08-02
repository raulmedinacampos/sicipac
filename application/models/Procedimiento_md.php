<?php
class Procedimiento_md extends CI_Model {
	public function GetOperationType() {
		$query = $this->db->select("CCVLICI, CLICITA");
		$query = $this->db->where(array("CVIGENT"=>"S"));
		$query = $this->db->get("CTLICIT");
		
		if ( $query->result() ) {
			return $query->result();
		}
	}
	
	public function GetProcType() {
		$query = $this->db->select("IDTIPOPROCEDIMIENTO, TIPOPROCEDIMIENTO");
		$query = $this->db->where(array("ACTIVO"=>"S"));
		$query = $this->db->get("CATTIPOPROCEDIMIENTO");
		
		if ( $query->result() ) {
			return $query->result();
		}
	}
	
	public function GetOrigenType() {
		$query = $this->db->select("NORIGEN, CDESCRI");
		$query = $this->db->where(array("CVIGENT"=>"S"));
		$query = $this->db->get("CCORIGN");
		
		if ( $query->result() ) {
			return $query->result();
		}
	}
}
?>