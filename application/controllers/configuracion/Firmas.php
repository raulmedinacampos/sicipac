<?php
class Firmas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model("firmas_md");
	}
	
	public function index() {
		$header["titulo"] = "Catálogo de firmas";
		$header["js"][] = "jquery.dataTables.min";
		$header["js"][] = "cat_firma";
		
		$params["firmas"] = $this->firmas_md->GetAllAdmin();
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/firmas', $params);
		$this->load->view('catalogos/modal_firma');
		$this->load->view('template/footer');
	}
	
	public function consultar() {
		$id = $this->input->post("id");
		$firma = $this->firmas_md->GetById($id);
		echo json_encode($firma);
	}
	
	public function agregar(){
		$data=array();
		
		array_push($data,$this->input->post('titulo'));
		array_push($data,$this->input->post('nombre'));
		array_push($data,$this->input->post('apPaterno'));
		array_push($data,$this->input->post('apMaterno'));
		array_push($data,$this->input->post('cargo'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->firmas_md->InsertRecord($data);
		
		redirect(base_url("configuracion/firmas"));
	}
	
	public function editar() {
		$id=$this->input->post("hdnID");
		$data=array();
		
		array_push($data,$this->input->post('titulo'));
		array_push($data,$this->input->post('nombre'));
		array_push($data,$this->input->post('apPaterno'));
		array_push($data,$this->input->post('apMaterno'));
		array_push($data,$this->input->post('cargo'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->firmas_md->UpdateRecord($data,$id);
		
		redirect(base_url("configuracion/firmas"));
	}
	
	public function eliminar() {
		$id=$this->input->post("idFirma");
		
		$this->firmas_md->Delete($id);
		
		redirect(base_url("configuracion/firmas"));
	}
}