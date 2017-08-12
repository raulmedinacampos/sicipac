<?php
class Direccion_md extends CI_Model {
	public function GetStates() {
		$query = $this->db->select('IDENTIDAD, ENTIDAD, NOMBRECORTO');
		$query = $this->db->where('ACTIVO', 'S');
		$query = $this->db->order_by('ENTIDAD');
		$query = $this->db->get('CATENTIDAD');
		
		if ( $query->result() ) {
			return $query->result();
		}
	}
	
	public function GetTownsByState($state) {
		$query = $this->db->select('IDMUNICIPIO, ENTIDAD, MUNICIPIO');
		$query = $this->db->where('ENTIDAD', $state);
		$query = $this->db->where('ACTIVO', 'S');
		$query = $this->db->order_by('MUNICIPIO');
		$query = $this->db->get('CATMUNICIPIO');
		
		if ( $query->result() ) {
			return $query->result();
		}
	}
	
	public function GetAddressByZipCode($cp) {
		$query = $this->db->select('IDCP, CODPOSTAL, ENTIDAD, MUNICIPIO, COLONIA');
		$query = $this->db->where('CODPOSTAL', $cp);
		$query = $this->db->where('ACTIVO', 'S');
		$query = $this->db->order_by('CODPOSTAL, COLONIA');
		$query = $this->db->get('CATCODPOSTAL');
		
		if ( $query->result() ) {
			return $query->result();
		}
	}
}
?>