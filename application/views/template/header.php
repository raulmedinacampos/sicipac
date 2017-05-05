<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Descripción del sistema">
	    <meta name="author" content="UDS">
		
		<title><?php if (isset($titulo)) {echo " - ".$titulo;} ?>SICIPAC</title>
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
		
		<!-- Fuente de íconos adicionales -->
		<link href="<?php echo base_url("css/elegant-icons-style.css"); ?>" rel="stylesheet" />
		
		<!-- Hojas de estilo -->
		<link href="<?php echo base_url("css/bootstrap.min.css"); ?>" rel="stylesheet" />
		<link href="<?php echo base_url("css/template.css"); ?>" rel="stylesheet" />
		<link href="<?php echo base_url("css/styles.css"); ?>" rel="stylesheet" />
		
		<!-- Bucle para jalar las hojas de estilo por sección -->
		<?php
		if ( isset($css) ) {
			foreach ( $css as $val ) {
		?>
		<link href="<?php echo base_url("css/".$val.".css"); ?>" rel="stylesheet" />
		<?php
			}
		}
		?>
		
		<!-- Scripts JS -->
		<script type="text/javascript" src="<?php echo base_url("js/jquery-2.2.4.min.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("js/bootstrap.min.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("js/jquery.scrollTo.min.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("js/jquery.nicescroll.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("js/scripts.js"); ?>"></script>
		
		<!-- Bucle para jalar scripts por sección -->
		<?php
		if ( isset($js) ) {
			foreach ( $js as $val ) {
		?>
		<script type="text/javascript" src="<?php echo base_url("js/".$val.".js"); ?>"></script>
		<?php
			}
		}
		?>
	</head>
	
	<body<?php if(uri_string() == "") {echo ' class="login"';} ?>>
		<!-- Header -->
		<header>
			<div id="logosWraper" class="container">
				<div class="col-xs-3"><img id="logoCOFAA" alt="COFAA" src="<?php echo base_url("images/cofaa.png"); ?>" class="img-responsive" /></div>
				<div class="col-xs-3"><img id="logoIPN" alt="IPN" src="<?php echo base_url("images/ipn.png"); ?>" class="img-responsive" /></div>
				<div class="col-xs-offset-3 col-xs-3"><img id="logoSEP" alt="SEP" src="<?php echo base_url("images/sep.png"); ?>" class="img-responsive" /></div>
			</div>
		</header>
		
		<div id="mainWrapper">  <!-- Contenedor principal -->