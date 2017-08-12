<?php
class Direcciones extends CI_Controller {
	public function cargar_municipios() {
		$this->load->model('direccion_md');
		
		$entidad = $this->input->post("entidad");		
		$municipios = $this->direccion_md->GetTownsByState($entidad);
		
		echo json_encode($municipios);
	}
	
	public function buscar() {
		$this->load->model('direccion_md');
		
		$cp = $this->input->post("cp");		
		$dir = $this->direccion_md->GetAddressByZipCode($cp);
		
		echo json_encode($dir);
	}
}
?>