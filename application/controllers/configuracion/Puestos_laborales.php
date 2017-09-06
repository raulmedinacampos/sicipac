<?php
class Puestos_laborales extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model("puestos_md");
	}
	
	public function index() {		
		$header["titulo"] = "Catálogo de puestos laborales";
		$header["js"][] = "jquery.dataTables.min";
		$header["js"][] = "cat_puesto";
		
		$params['puestos']=$this->puestos_md->GetAllAdmin();
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/puestos_laborales',$params);
		$this->load->view('catalogos/modal_puesto');
		$this->load->view('template/footer');
	
	}
	
	public function consultar() {
		$id = $this->input->post("id");
		$res = $this->puestos_md->GetById($id);
		echo json_encode($res);
	}
	
	public function agregar(){
		$data=array();
		
		array_push($data,$this->input->post('puesto'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->puestos_md->InsertRecord($data);
		
		redirect(base_url("configuracion/puestos-laborales"));
	}
	
	public function editar() {
		$id=$this->input->post("hdnID");
		$data=array();
		
		array_push($data,$this->input->post('puesto'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->puestos_md->UpdateRecord($data,$id);
		
		redirect(base_url("configuracion/puestos-laborales"));
	}
	
	public function eliminar() {
		$id=$this->input->post("idPuesto");
		
		$this->puestos_md->Delete($id);
		
		redirect(base_url("configuracion/puestos-laborales"));
	}
}