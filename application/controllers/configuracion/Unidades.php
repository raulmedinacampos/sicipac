<?php
class Unidades extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model("unidades_md");
	}
	
	public function index() {
		$header["titulo"] = "Catálogo de unidades de medida";
		$header["js"][] = "jquery.dataTables.min";
		$header["js"][] = "cat_unidad";
		
		$params['unidades']=$this->unidades_md->GetAllAdmin();
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/unidades',$params);
		$this->load->view('catalogos/modal_unidades');
		$this->load->view('template/footer');
	
	}
	
	public function consultar() {
		$id = $this->input->post("id");
		$res = $this->unidades_md->GetById($id);
		echo json_encode($res);
	}
	
	public function agregar(){
		$data=array();
		
		array_push($data,$this->input->post('unidad'));
		array_push($data,$this->input->post('abreviatura'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->unidades_md->InsertRecord($data);
		
		redirect(base_url("configuracion/unidades"));
	}
	
	public function editar() {
		$id=$this->input->post("hdnID");
		$data=array();
		
		array_push($data,$this->input->post('unidad'));
		array_push($data,$this->input->post('abreviatura'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->unidades_md->UpdateRecord($data,$id);
		
		redirect(base_url("configuracion/unidades"));
	}
	
	public function eliminar() {
		$id=$this->input->post("idUnidad");
		
		$this->unidades_md->Delete($id);
		
		redirect(base_url("configuracion/unidades"));
	}
}