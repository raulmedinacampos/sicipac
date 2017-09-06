<?php
class Usuarios extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model("usuarios_md");
	}
	
	public function index() {
		$this->load->model("areas_md");
		$this->load->model("puestos_md");
		
		$header["titulo"] = "Listado de usuarios";
		
		$header["js"][] = "jquery.dataTables.min";
		$header["js"][] = "usuarios";
		
		$params['usuarios']=$this->usuarios_md->GetAllAdmin();
		$params['areas']=$this->areas_md->GetAllActives();
		$params['puestos']=$this->puestos_md->GetAllActives();
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('catalogos/usuarios',$params);
		$this->load->view('catalogos/modal_usuario',$params);
		$this->load->view('template/footer');
	}
	
	public function consultar() {
		$id = $this->input->post("id");
		$area = $this->usuarios_md->GetById($id);
		echo json_encode($area);
	}
	
	public function agregar() {
		$data=array();
		
		array_push($data,$this->input->post('nomUsuario'));
		array_push($data,$this->input->post('password'));
		array_push($data,$this->input->post('numEmpleado'));
		array_push($data,$this->input->post('puesto'));
		array_push($data,$this->input->post('area'));
		array_push($data,$this->input->post('nombre'));
		array_push($data,$this->input->post('apPaterno'));
		array_push($data,$this->input->post('apMaterno'));
		array_push($data,$this->input->post('extension'));
		array_push($data,$this->input->post('correo').'@coffa.ipn.mx');
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		
		$this->usuarios_md->InsertRecord($data);
		
		redirect(base_url("configuracion/usuarios"));
	}
	
	public function editar() {
		$id=$this->input->post("hdnID");
		$data=array();
		
		array_push($data,$this->input->post('nomUsuario'));
		array_push($data,$this->input->post('password'));
		array_push($data,$this->input->post('numEmpleado'));
		array_push($data,$this->input->post('puesto'));
		array_push($data,$this->input->post('area'));
		array_push($data,$this->input->post('nombre'));
		array_push($data,$this->input->post('apPaterno'));
		array_push($data,$this->input->post('apMaterno'));
		array_push($data,$this->input->post('extension'));
		array_push($data,$this->input->post('correo').'@coffa.ipn.mx');
		array_push($data, date('Y-m-d'));
		array_push($data, 1);//Sacar de la variable de session
		array_push($data,$this->input->post('activo'));
		$this->usuarios_md->UpdateRecord($data,$id);
		
		redirect(base_url("configuracion/usuarios"));
	}
	
	public function eliminar() {
		$id=$this->input->post("idUsuario");
		
		$this->usuarios_md->Delete($id);
		
		redirect(base_url("configuracion/usuarios"));
	}
}
