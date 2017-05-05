<?php
class Inicio extends CI_Controller {
	public function index() {
		$header['js'][] = 'login';
		
		$this->load->view('template/header', $header);
		$this->load->view('login');
		$this->load->view('template/footer');
	}
}
?>