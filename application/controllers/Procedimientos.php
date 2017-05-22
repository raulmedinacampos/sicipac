<?php
	class Procedimientos extends CI_Controller {
		public function index() {
			$header["titulo"] = "Procedimientos";
			$header["js"][] = "jquery.dataTables.min";
			$header["js"][] = "procedimientos";
			
			$this->load->view('template/header', $header);
			$this->load->view('template/menu');
			$this->load->view('procedimientos/listado');
			$this->load->view('template/footer');
		}
		
		public function nuevo_procedimiento() {
			$header["titulo"] = "Nuevo procedimiento";
			$header["css"][] = "bootstrap-datetimepicker.min";
			$header["css"][] = "fileinput.min";
			
			$header["js"][] = "moment";
			$header["js"][] = "bootstrap-datetimepicker.min";
			$header["js"][] = "ckeditor/ckeditor";
			$header["js"][] = "fileinput.min";
			$header["js"][] = "nuevo_procedimiento";
			
			$this->load->view('template/header', $header);
			$this->load->view('template/menu');
			$this->load->view('procedimientos/nuevo');
			$this->load->view('procedimientos/modal_visita');
			$this->load->view('procedimientos/modal_correo');
			$this->load->view('procedimientos/modal_partida');
			$this->load->view('procedimientos/modal_participante');
			$this->load->view('template/footer');
		}
	}
?>