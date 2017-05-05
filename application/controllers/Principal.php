<?php
class Principal extends CI_Controller {
	public function index() {
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('template/footer');
	}
}
?>