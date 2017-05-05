<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	 function __construct(){
		 
        parent::__construct();
		$this->load->model('login_model');
		$this->load->helper('url');
		
	}

	public function index(){

		$err=0;
		if($this->session->flashdata('error')!=NULL){	
			$err=$this->session->flashdata('error');
		}
		$params=array("err"=>$err);		
		$this->load->view('admin/head');
		$this->load->view('admin/entrar',$params);
		$this->load->view('admin/footer');
	}
		
	public function validar(){
		
		/*
		if($this->session->flashdata('ticket')!=null){	
			$tck=$this->session->flashdata('ticket');
		}
		*/
		
		$nag=$this->input->post('usr');
		$pass=$this->input->post('contra');
		$ag=$this->login_model->is_ag($nag,sha1($pass));
		$redirect=base_url()."administrador/login";
		if( count($ag)>0){
			$nv=$ag[0]->id_nivel;
			$nom=$ag[0]->nombre;
			$id=$ag[0]->id;
			$this->session->set_userdata(array("nom"=>$nom,"nv"=>$nv,"id_ad"=>$id));
			$this->login_model->set_log($id);
			$redirect=base_url()."administrador";
						
		}
		else{
			$this->session->set_flashdata('error',"1");
		}
		redirect($redirect);
	}
	
		
	public function cerrar(){
		
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
}