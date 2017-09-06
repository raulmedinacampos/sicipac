<?php
	class Procedimientos extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('procedimiento_md');
		}
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
			$this->load->model('unidades_resp_md');
			$this->load->model('unidades_md');
			
			$header["titulo"] = "Nuevo procedimiento";
			$header["css"][] = "bootstrap-datetimepicker.min";
			$header["css"][] = "fileinput.min";
			
			$header["js"][] = "moment";
			$header["js"][] = "bootstrap-datetimepicker.min";
			$header["js"][] = "ckeditor/ckeditor";
			$header["js"][] = "fileinput.min";
			$header["js"][] = "nuevo_procedimiento";
			
			$params['tipo_operacion'] = $this->procedimiento_md->GetOperationType();
			$params['procedencia'] = $this->procedimiento_md->GetOrigenType();
			$params['caracter_procedimiento'] = $this->procedimiento_md->getProcType();
			$params["unidades"] = $this->unidades_resp_md->GetAllActives();
			$params['medidas'] = $this->unidades_md->GetAllActives();
			
			$this->load->view('template/header', $header);
			$this->load->view('template/menu');
			$this->load->view('procedimientos/nuevo', $params);
			$this->load->view('procedimientos/modal_visita');
			$this->load->view('procedimientos/modal_correo');
			$this->load->view('procedimientos/modal_partida');
			$this->load->view('procedimientos/modal_proveedor');
			$this->load->view('template/footer');
		}
	}
?>