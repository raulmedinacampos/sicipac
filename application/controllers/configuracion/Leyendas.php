<?php
class Leyendas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model("leyendas_md");
	}
	
	public function index() {
		$header["titulo"] = "Catálogo de leyendas";
		$header["js"][] = "jquery.dataTables.min";
		$header["js"][] = "cat_leyenda";
		
		$params["leyendas"] = $this->leyendas_md->GetAllAdmin();
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/leyendas',$params);
		$this->load->view('catalogos/modal_leyenda');
		$this->load->view('template/footer');
	
	}
	
	public function consultar() {
		$id = $this->input->post("id");
		$res = $this->leyendas_md->GetById($id);
		echo json_encode($res);
	}
	
	public function agregar(){
		$data=array();
		
		array_push($data,$this->input->post('clave'));
		array_push($data,$this->input->post('seccion'));
		array_push($data,$this->input->post('leyenda'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->leyendas_md->InsertRecord($data);
		
		redirect(base_url("configuracion/leyendas"));
	}
	
	public function editar() {
		$id=$this->input->post("hdnID");
		$data=array();
		
		array_push($data,$this->input->post('clave'));
		array_push($data,$this->input->post('seccion'));
		array_push($data,$this->input->post('leyenda'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->leyendas_md->UpdateRecord($data,$id);
		
		redirect(base_url("configuracion/leyendas"));
	}
	
	public function eliminar() {
		$id=$this->input->post("idLeyenda");
		
		$this->leyendas_md->Delete($id);
		
		redirect(base_url("configuracion/leyendas"));
	}
}