<?php
class Inicio extends CI_Controller {
	public function index() {
		$this->load->model("login_md");
		
		$this->login_md->ValidateSession();
	}
}
?>