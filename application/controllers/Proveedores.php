<?php
class Proveedores extends CI_Controller {
	public function index() {
		$header["titulo"] = "Proveedores";
		$header["js"][] = "jquery.dataTables.min";
		$header["js"][] = "proveedores";
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('proveedores/listado');
		$this->load->view('template/footer');
	}
	
	public function nuevo_proveedor() {
		$this->load->model("direccion_md");
		
		$header["titulo"] = "Nuevo proveedor";
		
		$header["css"][] = "bootstrap-datetimepicker.min";
		$header["css"][] = "fileinput.min";
		
		$header["js"][] = "moment";
		$header["js"][] = "bootstrap-datetimepicker.min";
		$header["js"][] = "fileinput.min";
		$header["js"][] = "direcciones";
		$header["js"][] = "nuevo_proveedor";
		
		$params["entidades"] = $this->direccion_md->GetStates();
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('proveedores/nuevo', $params);
		$this->load->view('proveedores/modal_representante');
		$this->load->view('template/footer');
	}
}