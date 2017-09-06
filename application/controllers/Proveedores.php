<?php
class Proveedores extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("proveedores_md");
		$this->load->model("representantes_md");
	}
	
	public function index() {
		$this->load->model("direccion_md");
		
		$header["titulo"] = "Proveedores";
		
		$header["js"][] = "jquery.dataTables.min";
		$header["js"][] = "direcciones";
		$header["js"][] = "proveedores";
		
		$params["entidades"] = $this->direccion_md->GetStates();
		$params["tipo_representante"] = $this->representantes_md->GetTypes();
		$params['proveedores']=$this->proveedores_md->GetAllAdmin();
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('proveedores/listado', $params);
		$this->load->view('proveedores/modal_proveedor');
		$this->load->view('proveedores/modal_representante');
		$this->load->view('template/footer');
	}
	
	public function consultar_proveedor() {
		$id = $this->input->post("id");
		$res = $this->proveedores_md->GetById($id);
		//$res['representantes']=$this->representantes_md->GetByProveedor($id);
		echo json_encode($res);
	}
	
	public function consultar_representante() {
		$id = $this->input->post("id");
		$res = $this->proveedores_md->GetById($id);
		//$res['representantes']=$this->representantes_md->GetByProveedor($id);
		echo json_encode($res);
	}
	
	public function agregar() {
		$data=array();
		
		array_push($data,$this->input->post('rfc'));
		array_push($data,$this->input->post('tipoContribuyente'));
		array_push($data,$this->input->post('nombre'));
		array_push($data,$this->input->post('apPaterno'));
		array_push($data,$this->input->post('apMaterno'));
		array_push($data,$this->input->post('razonSocial'));
		array_push($data,$this->input->post('calle'));
		array_push($data,$this->input->post('numExt'));
		array_push($data,$this->input->post('numInt'));
		array_push($data,$this->input->post('colonia'));
		array_push($data,$this->input->post('cp'));
		array_push($data,$this->input->post('entidad'));
		array_push($data,$this->input->post('municipio'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data, 'S');  // Los proveedores nuevos siempre estarán activos por default
		
		$this->proveedores_md->InsertRecord($data);
		
		redirect(base_url("proveedores"));
	}
	
	public function editar() {
		$id=$this->input->post("hdnID");
		$data=array();
		
		array_push($data,$this->input->post('rfc'));
		array_push($data,$this->input->post('tipoContribuyente'));
		array_push($data,$this->input->post('nombre'));
		array_push($data,$this->input->post('apPaterno'));
		array_push($data,$this->input->post('apMaterno'));
		array_push($data,$this->input->post('razonSocial'));
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
		
		$this->proveedores_md->UpdateRecord($data,$id);
		
		redirect(base_url("proveedores"));
	}
	
	
	public function agregar_representante(){
		$this->load->model("prov_rep_md");
		$this->load->model("rep_form_cont_md");
		$data=array();
		
		array_push($data,$this->input->post('nombre'));
		array_push($data,$this->input->post('apPatermo'));
		array_push($data,$this->input->post('apMaterno'));
		array_push($data,$this->input->post('tipo'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$rep=$this->representantes_md->InsertRecord($data);
		$prov=$this->input->post("hdnID");
		
		$data=array();
		array_push($data,$prov);
		array_push($data,$rep);
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->prov_rep_md->InsertRecord($data);
		
		if($this->input->post("telOficina")!=""){
			$data=array();
			array_push($data,$rep);
			array_push($data,1);
			array_push($data,$this->input->post('telOficina'));
			array_push($data, date('Y-m-d'));
			array_push($data, 1);//Sacar de la variable de session
			array_push($data,$this->input->post('activo'));
			
			$this->rep_form_cont_md->InsertRecord($data);
		}
		
		if($this->input->post("celular")!=""){
			$data=array();
			array_push($data,$rep);
			array_push($data,2);
			array_push($data,$this->input->post('celular'));
			array_push($data, date('Y-m-d'));
			array_push($data, 1);//Sacar de la variable de session
			array_push($data,$this->input->post('activo'));
			
			$this->rep_form_cont_md->InsertRecord($data);
		}
		
		if($this->input->post("correo")!=""){
			$data=array();
			array_push($data,$rep);
			array_push($data,3);
			array_push($data,$this->input->post('correo'));
			array_push($data, date('Y-m-d'));
			array_push($data, 1);//Sacar de la variable de session
			array_push($data,$this->input->post('activo'));
			
			$this->rep_form_cont_md->InsertRecord($data);
		}
		
		
		redirect(base_url("proveedores"));
	}
	
	public function editar_representante(){
		
		$id=$this->input->post("idRepresentante");
		
		$data=array();
		
		array_push($data,$this->input->post('nombre'));
		array_push($data,$this->input->post('apPatermo'));
		array_push($data,$this->input->post('apMaterno'));
		array_push($data,$this->input->post('tipo'));
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$rep=$this->representantes_md->UpdateRecord($data,$id);
		
		redirect(base_url("proveedores"));
	}
	
	public function eliminar() {
		$id=$this->input->post("idProveedor");
		
		$this->proveedores_md->Delete($id);
		
		redirect(base_url("proveedores"));
	}
}