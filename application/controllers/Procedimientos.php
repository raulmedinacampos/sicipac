<?php
	class Procedimientos extends CI_Controller {
		public function index() {
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('procedimientos/listado');
			$this->load->view('template/footer');
		}
	}
?>