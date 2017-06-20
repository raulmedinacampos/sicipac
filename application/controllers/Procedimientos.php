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
			
			$this->load->model('tipo_operacion_md');
			$this->load->model('caracter_procedimiento_md');
			
			$data['tipo_operacion'] = $this->tipo_operacion_md->getOpTypes();
			$data['caracter_procedimiento'] = $this->caracter_procedimiento_md->getProcTypes();
			
			$this->load->view('template/header', $header);
			$this->load->view('template/menu');
			$this->load->view('procedimientos/nuevo', $data);
			$this->load->view('procedimientos/modal_visita');
			$this->load->view('procedimientos/modal_correo');
			$this->load->view('procedimientos/modal_partida');
			$this->load->view('procedimientos/modal_proveedor');
			$this->load->view('template/footer');
		}
	}
?>