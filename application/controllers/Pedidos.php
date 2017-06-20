<?php
class Pedidos extends CI_Controller {
	public function index() {
		$header["titulo"] = "Pedidos";
		$header["js"][] = "jquery.dataTables.min";
		$header["js"][] = "pedidos";
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('pedidos/listado');
		$this->load->view('template/footer');
	}
	
	public function nuevo_pedido() {
		$header["titulo"] = "Nuevo pedido";
		$header["css"][] = "bootstrap-datetimepicker.min";
		$header["css"][] = "fileinput.min";
		
		$header["js"][] = "moment";
		$header["js"][] = "bootstrap-datetimepicker.min";
		$header["js"][] = "ckeditor/ckeditor";
		$header["js"][] = "fileinput.min";
		$header["js"][] = "nuevo_procedimiento";
		
		$this->load->view('template/header', $header);
		$this->load->view('template/menu');
		$this->load->view('pedidos/nuevo');
		$this->load->view('template/footer');
	}
	
	public function pedido_xls() {
		$this->load->library('excel');
		$fila = 1;
		
		// Contenido de las celdas
		$this->excel->setActiveSheetIndex(0);
		//$this->excel->getActiveSheet()->getStyle('A'.$fila)->getFont()->setBold(true);
		//$this->excel->getActiveSheet()->getStyle('A'.$fila)->getFont()->setSize(18);
		//$this->excel->getActiveSheet()->setCellValue('A'.$fila, 'Reporte por institución');
		/*$fila+=2;
		$this->excel->getActiveSheet()->getStyle('A'.$fila)->getFont()->setBold(true);
		$this->excel->getActiveSheet()->setCellValue('A'.$fila, utf8_encode('Total de registrados: '.$this->reporte->totalRegs()));
		$fila+=2;
		// Encabezados
		$this->excel->getActiveSheet()->getStyle('A'.$fila.':B'.$fila)->getFont()->setBold(true);
		$this->excel->getActiveSheet()->getStyle('A'.$fila.':B'.$fila)->getFont()->getColor()->setRGB('FFFFFF');
		$this->excel->getActiveSheet()->getStyle('A'.$fila.':B'.$fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('484F56');
		$this->excel->getActiveSheet()->getStyle('A'.$fila.':B'.$fila)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		
		$this->excel->getActiveSheet()
		->setCellValue('A'.$fila, utf8_encode('Institución'))
		->setCellValue('B'.$fila, utf8_encode('Registrados'));
		$fila++;
		
		// Datos
		for($i=0; $i<sizeof($registros_aux); $i++) {
			$row = $registros_aux[$i];
			$this->excel->getActiveSheet()
			->setCellValue('A'.$fila, strip_tags($row->institucion))
			->setCellValue('B'.$fila, utf8_encode($row->total));
			
			$setColor = ($fila > 1 && $fila % 2 == 1) ? true : false;
			
			if($setColor) {
				$this->excel->getActiveSheet()->getStyle('A'.$fila.':B'.$fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('DEE1E2');
			}
			
			$fila++;
		}*/
		
		$this->excel->createSheet(1);
		
		$this->excel->createSheet(2);
		$this->excel->setActiveSheetIndex(2);
		$this->excel->getSheet(2);
		$this->excel->getActiveSheet()->setCellValue('B13', 'IMPORTE HOJA ANTERIOR');
		
		$terminos = "LA CONVOCANTE RESGUARDARÁ LAS FIANZAS DE CUMPLIMIENTO DE LOS PEDIDOS DURANTE SEIS MESES CONTADOS A PARTIR DE LA ENTREGA DE LOS BIENES A ENTERA SATISFACCIÓN DEL ÁREA USUARIA, DE CONFORMIDAD A LO ESTABLECIDO EN EL PUNTO 7.2 DE LA CONVOCATORIA\n";
		$terminos .= "PRÓRROGAS PARA EL CUMPLIMIENTO DE LAS OBLIGACIONES CONTRACTUALES Y LOS REQUISITOS QUE DEBERÁN OBSERVARSE.
Con fundamento a lo establecido en el artículo 45 fracción XV, de la Ley de Adquisiciones, Arrendamientos y Servicios del Sector Público y artículo 91 de su Reglamento, la Convocante podrá autorizar una prórroga en el plazo de entrega de los bienes, en alguno de los siguientes supuestos:
A) Si el Adjudicado no puede entregar los bienes por causas no imputables al mismo, deberá solicitar por escrito a la Convocante una prórroga para la entrega de éstos, por lo menos con diez días hábiles de anticipación a la fecha de cumplimiento del plazo originalmente establecido, debiendo acompañar a dicha solicitud la documentación y elementos que en su caso, acrediten las causas que motiven el atraso.
La Dirección de Adquisiciones de la Convocante, solicitará a través de la Dirección Técnica y de Promoción al usuario el análisis de la solicitud de prórroga, emitiendo al respecto y por escrito en un plazo no mayor de cinco días hábiles contados a partir de la recepción de la solicitud la respuesta que corresponda, siendo de la Dirección de Adquisiciones la más estricta responsabilidad de la respuesta.
En ningún caso se otorgará para la entrega, una prórroga que exceda al ejercicio fiscal vigente. En caso de incumplimiento a esta prórroga se procederá a la aplicación de las penas convencionales que correspondan, de conformidad al punto 7.8 de la presente convocatoria, transcurrido el plazo establecido en el punto 7.10 se procederá a la rescisión administrativa del pedido.
B) Por caso fortuito o fuerza mayor, o por causas atribuibles a la Convocante, se podrán modificar los pedidos a efecto de diferir la fecha para la entrega de los bienes, en este supuesto se expedirá documento de autorización, no procediendo la aplicación de penas convencionales por atraso.
VISITAS O INSPECCIONES.
Con base en el Articulo 57 de la Ley y el 107 de su Reglamento el Proveedor deberá proporcionar la información que en su momento requiera la  Secretaria Pública y el Organo Interno de Control, con motivo de Auditorias, Visitas o Inspecciones.";
		
		$this->excel->getActiveSheet()->setCellValue('B14', $terminos);
		$this->excel->setActiveSheetIndex(0)->mergeCells('B14:I32');
		$this->excel->getActiveSheet()->getStyle('B14')->getFont()->setSize(8);
		$this->excel->getActiveSheet()->getStyle('B14')->getAlignment()->setWrapText(true);
		$this->excel->getActiveSheet()->getStyle('B14')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
		
		// Ancho de las columnas
		$this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		//$this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		
		// Nombre de la hoja
		//$this->excel->getActiveSheet()->setTitle('2');
		
		$this->excel->createSheet(3);
		$this->excel->setActiveSheetIndex(3);
		$this->excel->getActiveSheet()->setCellValue('B13', 'IMPORTE HOJA ANTERIOR');
		$privacidad = "PROTECCIÓN DE DATOS PERSONALES DE ACUERDO A LA LEY GENERAL DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA, LEY FEDERAL DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA, LEY GENERAL DE PROTECCION DE DATOS PERSONALES EN POSESION DE SUJETOS OBLIGADOS Y ACUERDO POR EL QUE SE EXPIDE EL PROTOCOLO DE ACTUACION EN MATERIA DE CONTRATACIONES PÚBLICAS, OTORGAMIENTO Y PRÓRROGAS DE LICENCIAS, PERMISOS, AUTORIZACIONES Y CONCESIONES.

Se comunica al adjudicado, que los datos personales recabados serán protegidos,  incorporados y tratados  en el Sistema de Datos Personales del Departamento de Cotizaciones, Licitaciones y Pedidos, con fundamento en los artículos 18, 20 y 21 de la Ley General de Transparencia y acceso a la Información Pública Gubernamental y Décimo Sexto, Décimo Séptimo, Vigésimo Séptimo, Vigésimo Octavo, Vigésimo Noveno, Trigésimo, Trigésimo Primero, Trigésimo Segundo y Trigésimo Tercero de los Lineamientos de Protección de Datos Personales, con la finalidad de obtener registros de identificación de personas físicas o morales que participan en las licitaciones públicas Nacionales e Internacionales, adjudicaciones directas e Invitaciones a cuando menos tres personas que convoca ésta Comisión, el cual fue registrado en el listado de sistemas de datos personales ante el Instituto Nacional de Acceso a la Información y Protección de Datos Personales (www.ifai.org.mx). La Unidad Administrativa responsable del sistema de datos personales es la  Dirección de Adquisiciones en la Comisión de Operación y Fomento de Actividades Académicas del IPN, y la dirección donde el interesado podrá ejercer los derechos de acceso y corrección de la misma es Tresguerras No. 27 esquina Tolsá, Colonia Centro, Código Postal 06040, Delegación Cuauhtémoc. Lo anterior se informa en cumplimiento al Decimoséptimo de los Lineamientos de Protección de Datos Personales, publicados en el Diario Oficial de la Federación el 30 de septiembre del 2005 y Numeral 7 del Acuerdo por el que se expide el Protocolo de Actuación en Materia de Contrataciones Públicas, Otorgamiento y Prórroga de Licencias, Permisos, Autorizaciones y Concesiones, publicados en el Diario Oficial de la Federación el 20 de agosto de 2015. Asi como el diverso por el que se modifica dicho protocolo públicado en el Diario Oficial de la Federación al 28 de febrero del 2017.";
		
		$this->excel->getActiveSheet()->setCellValue('B14', $privacidad);
		$this->excel->setActiveSheetIndex(0)->mergeCells('B14:I32');
		$this->excel->getActiveSheet()->getStyle('B14')->getFont()->setSize(8);
		$this->excel->getActiveSheet()->getStyle('B14')->getAlignment()->setWrapText(true);
		$this->excel->getActiveSheet()->getStyle('B14')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
		
		// Headers para salida de archivo xlsx
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="pedido.xlsx"');
		header('Cache-Control: max-age=0');
		// Header para IE9
		header('Cache-Control: max-age=1');
		
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');
		$objWriter->save("php://output");
		exit();
	}
}
?>