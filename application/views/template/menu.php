
<!-- Pleca superior -->
<div class="header dark-bg">
	<div class="toggle-nav">
		<div class="icon-reorder tooltips" data-original-title="Mostrar / ocultar menú" data-placement="bottom">
			<i class="icon_menu"></i>
		</div>
	</div>

	<!-- Logo del sistema -->
	<a href="index.html" class="logo">SICIPAC</a>
	<!-- Fin logo -->

	<div class="top-nav notification-row">
		<ul class="nav pull-right top-menu">
			<!-- Menú de acciones de usuario -->
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<span class="glyphicon glyphicon-user"></span> 
					<span class="username"><?php echo $this->session->nom; ?></span> 
					<b class="caret"></b>
				</a>
				
				<ul class="dropdown-menu extended logout">
					<div class="log-arrow-up"></div>
					<li class="eborder-top">
						<a href="#">
							<i class="icon_profile"></i>
							Mis datos
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("login/cerrar"); ?>">
							<i class="icon_key_alt"></i> 
							Salir
						</a>
					</li>
				</ul>
			</li>
			<!-- Fin menú de acciones usuario -->
		</ul>
	</div>
</div>
<!-- Fin pleca superior -->


<!-- Menú lateral -->
<aside>
	<div id="sidebar" class="nav-collapse">
		<ul class="sidebar-menu">
			<li<?php if($this->uri->segment(1) == "principal") {echo ' class="active"';} ?>>
				<a class="" href="<?php echo base_url('principal'); ?>"> 
					<i class="icon_house_alt"></i> 
					<span>Inicio</span>
				</a>
			</li>
			<li class="sub-menu">
				<a href="javascript:;" class=""> 
					<i class="icon_documents_alt"></i> 
					<span>Catálogos</span> 
					<span class="menu-arrow arrow_carrot-right"></span>
				</a>

				<ul class="sub">
					<li>
						<a class="" href="form_component.html">Catálogo 1</a>
					</li>
					<li>
						<a class="" href="form_validation.html">Catálogo 2</a>
					</li>
				</ul>
			</li>
			<li<?php if($this->uri->segment(1)== "procedimientos") {echo ' class="active"';} ?>>
				<a href="<?php echo base_url('procedimientos'); ?>" class=""> 
					<i class="icon_desktop"></i> 
					<span>Procedimientos</span>
				</a>
			</li>
			<li>
				<a class="" href="widgets.html"> 
					<i class="icon_bag_alt"></i> 
					<span>Proveedores</span>
				</a>
			</li>
			<li class="sub-menu <?php if($this->uri->segment(1)== "pedidos") {echo 'selected';} ?>">
				<a href="javascript:;" class=""> 
					<i class="icon_pens"></i> 
					<span>Pedidos</span> 
					<span class="menu-arrow arrow_carrot-right"></span>
				</a>

				<ul class="sub">
					<li>
						<a class="" href="<?php echo base_url("pedidos"); ?>">Pedido</a>
					</li>
					<li>
						<a class="" href="basic_table.html">Modificación</a>
					</li>
				</ul>
			</li>
			<li>
				<a class="" href="chart-chartjs.html"> 
					<i class="icon_tools"></i>
					<span>Contratos</span>
				</a>
			</li>
			<li>
				<a class="" href="chart-chartjs.html"> 
					<i class="icon_piechart"></i>
					<span>Reportes y estadísticas</span>
				</a>
			</li>
			<li class="sub-menu">
				<a href="javascript:;" class=""> 
					<i class="icon_dislike"></i> 
					<span>Sanciones</span> 
					<span class="menu-arrow arrow_carrot-right"></span>
				</a>

				<ul class="sub">
					<li>
						<a class="" href="basic_table.html">Almacén 1</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</aside>
<!-- Termina menú lateral -->