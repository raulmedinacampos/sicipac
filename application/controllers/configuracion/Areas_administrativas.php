<?php
class Areas_administrativas extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model("areas_md");
	}
	
	public function index() {
		$header["titulo"] = "Catálogo de áreas administrativas";
		$header["js"][] = "jquery.dataTables.min";
		$header["js"][] = "cat_area";
		
		$params["areas"] = $this->areas_md->GetAllAdmin();
		$params["activas"] = $this->areas_md->GetAllActives();
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/areas_administrativas', $params);
		$this->load->view('catalogos/modal_area');
		$this->load->view('template/footer');
	}
	
	public function consultar() {
		$id = $this->input->post("id");
		$area = $this->areas_md->GetById($id);
		echo json_encode($area);
	}
	
	public function agregar() {
		$data=array();
		
		array_push($data,$this->input->post('siglas'));
		array_push($data,$this->input->post('area'));
		array_push($data,$this->input->post('areaPadre'));
		array_push($data,$this->input->post('descripcion'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->areas_md->InsertRecord($data);
		
		redirect(base_url("configuracion/areas-administrativas"));
	}
	
	public function editar() {
		$id=$this->input->post("hdnID");
		$data=array();
		
		array_push($data,$this->input->post('siglas'));
		array_push($data,$this->input->post('area'));
		array_push($data,$this->input->post('areaPadre'));
		array_push($data,$this->input->post('descripcion'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->areas_md->UpdateRecord($data,$id);
		
		redirect(base_url("configuracion/areas-administrativas"));
	}
	
	public function eliminar() {
		$id=$this->input->post("idArea");
		
		$this->areas_md->Delete($id);
		
		redirect(base_url("configuracion/areas-administrativas"));
	}
}
