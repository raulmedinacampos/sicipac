<?php
class Configuracion extends CI_Controller {
	public function areas_administrativas() {
		$header["titulo"] = "Catálogo de áreas administrativas";
		$header["js"][] = "cat_area";
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/areas_administrativas');
		$this->load->view('catalogos/modal_area');
		$this->load->view('template/footer');
	}
	
	public function firmas() {
		$header["titulo"] = "Catálogo de firmas";
		$header["js"][] = "cat_firma";
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/firmas');
		$this->load->view('catalogos/modal_firma');
		$this->load->view('template/footer');
	}
	
	public function leyendas() {
		$header["titulo"] = "Catálogo de leyendas";
		$header["js"][] = "cat_leyenda";
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/leyendas');
		$this->load->view('catalogos/modal_leyenda');
		$this->load->view('template/footer');
	}
		
	public function puestos_laborales() {
		$header["titulo"] = "Catálogo de puestos laborales";
		$header["js"][] = "cat_puesto";
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/puestos_laborales');
		$this->load->view('catalogos/modal_puesto');
		$this->load->view('template/footer');
	}
	
	public function unidades() {
		$header["titulo"] = "Catálogo de unidades de medida";
		$header["js"][] = "cat_unidad";
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/unidades');
		$this->load->view('catalogos/modal_unidades');
		$this->load->view('template/footer');
	}
	
	public function unidades_responsables() {
		$header["titulo"] = "Catálogo de unidades responsables";
		$header["js"][] = "cat_uni_resp";
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/unidades_responsables');
		$this->load->view('catalogos/modal_uni_resp');
		$this->load->view('template/footer');
	}
	
	public function usuarios() {
		$header["titulo"] = "Listado de usuarios";
		$header["js"][] = "usuarios";
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/usuarios');
		$this->load->view('catalogos/modal_usuario');
		$this->load->view('template/footer');
	}
}
?>