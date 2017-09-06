<?php
class Unidades_responsables extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model("unidades_resp_md");
	}
	
	public function index() {
		$this->load->model("direccion_md");
		
		$header["titulo"] = "Catálogo de unidades responsables";
		
		$header["js"][] = "direcciones";
		$header["js"][] = "jquery.dataTables.min";
		$header["js"][] = "cat_uni_resp";
		
		$params["entidades"] = $this->direccion_md->GetStates();
		$params["unidades"] = $this->unidades_resp_md->GetAllAdmin();
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/unidades_responsables', $params);
		$this->load->view('catalogos/modal_uni_resp');
		$this->load->view('template/footer');
	}
	
	public function consultar() {
		$id = $this->input->post("id");
		$area = $this->unidades_resp_md->GetById($id);
		echo json_encode($area);
	}
	
	public function agregar() {
		$data=array();
		
		array_push($data,$this->input->post('clave'));
		array_push($data,$this->input->post('siglas'));
		array_push($data,$this->input->post('unidad'));
		array_push($data,$this->input->post('calle'));
		array_push($data,$this->input->post('numExt'));
		array_push($data,$this->input->post('numInt'));
		array_push($data,$this->input->post('colonia'));
		array_push($data,$this->input->post('cp'));
		array_push($data,$this->input->post('entidad'));
		array_push($data,$this->input->post('municipio'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->unidades_resp_md->InsertRecord($data);
		
		redirect(base_url("configuracion/unidades-responsables"));
	}
	
	public function editar() {
		$id=$this->input->post("hdnID");
		$data=array();
				
		array_push($data,$this->input->post('clave'));
		array_push($data,$this->input->post('siglas'));
		array_push($data,$this->input->post('unidad'));
		array_push($data,$this->input->post('calle'));
		array_push($data,$this->input->post('numExt'));
		array_push($data,$this->input->post('numInt'));
		array_push($data,$this->input->post('colonia'));
		array_push($data,$this->input->post('cp'));
		array_push($data,$this->input->post('entidad'));
		array_push($data,$this->input->post('municipio'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		$this->unidades_resp_md->UpdateRecord($data,$id);
		
		redirect(base_url("configuracion/unidades-responsables"));
	}
	
	public function eliminar() {
		$id=$this->input->post("idUnidad");
		
		$this->unidades_resp_md->Delete($id);
		
		redirect(base_url("configuracion/unidades-responsables"));
	}
}
