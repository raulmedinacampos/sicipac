<?php
class Tipo_operacion_md extends CI_Model {
	public function getOpTypes() {
		$data = array();
		$d = new stdClass();
		
		$d->id = 1;
		$d->tipo = "Licitación";
		
		array_push($data, $d);
		
		$d = new stdClass();
		$d->id = 2;
		$d->tipo = "3p";
		
		array_push($data, $d);
		
		$d = new stdClass();
		$d->id = 3;
		$d->tipo = "Adjudicación directa";
		
		array_push($data, $d);
		
		return $data;
	}
}