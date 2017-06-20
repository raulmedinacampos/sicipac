<?php
class Caracter_procedimiento_md extends CI_Model {
	public function getProcTypes() {
		$data = array();
		$d = new stdClass();
		
		$d->id = 1;
		$d->tipo = "Presencial";
		
		array_push($data, $d);
		
		$d = new stdClass();
		$d->id = 2;
		$d->tipo = "Electrónica";
		
		array_push($data, $d);
		
		$d = new stdClass();
		$d->id = 3;
		$d->tipo = "Mixta";
		
		array_push($data, $d);
		
		return $data;
	}
}