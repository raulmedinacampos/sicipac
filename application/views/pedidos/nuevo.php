
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Nuevo pedido</h2>
			</div>
		</div>
		
		<!-- Pestañas -->
		<ul class="nav nav-tabs nav-justified" role="tablist">
			<li role="presentation" class="active"><a href="#generales" aria-controls="generales" role="tab" data-toggle="tab">Generales</a></li>
			<li role="presentation"><a href="#partidas" aria-controls="partidas" role="tab" data-toggle="tab">Partidas</a></li>
		</ul>
		
		<!-- Paneles -->
		<form method="post" action="">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="generales">
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Núm. de pedido:</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-md-6">
								<label>Año:</label>
								<input type="text" value="<?php echo date('Y'); ?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Fecha:</label>
								<div class="input-group date datepicker">
									<input type="text" class="form-control" placeholder="Ingresa fecha" />
									<div class="input-group-addon"><i class="icon_calendar"></i></div>
								</div>
							</div>
							<div class="col-md-6">
								<label>Requisición número:</label>
								<input type="text" class="form-control" placeholder="Ingresa clave" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label>Proveedor:</label>
								<input type="text" class="form-control" placeholder="Ingresa nombre" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Fecha de cotización:</label>
								<div class="input-group date datepicker">
									<input type="text" class="form-control" placeholder="Ingresa fecha" />
									<div class="input-group-addon"><i class="icon_calendar"></i></div>
								</div>
							</div>
							<div class="col-md-6">
								<label>Condiciones de entrega:</label>
								<input type="text" class="form-control" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label>Condiciones de pago:</label>
								<input type="text" class="form-control" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Número de licitación:</label>
								<input type="text" class="form-control" />
							</div>
							<div class="col-md-6">
								<label>Fecha de licitación:</label>
								<div class="input-group date datepicker">
									<input type="text" class="form-control" placeholder="Ingresa fecha" />
									<div class="input-group-addon"><i class="icon_calendar"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>  <!-- Fin generales -->
				
				<div role="tabpanel" class="tab-pane" id="partidas">
					<div class="form-group">
						<button type="button" id="btnNuevaPartida" class="btn btn-md btn-default" data-toggle="modal" data-target="#modalPartida"> <span class="glyphicon glyphicon-plus"></span> Nueva partida</button>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Partida</th>
								<th>Descripción</th>
								<th>Cantidad</th>
								<th>Unidad</th>
								<th class="text-nowrap">Precio unitario neto</th>
								<th class="text-nowrap">Precio total neto</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>87</td>
								<td>Picnómetro de 10 milímetros marca Kavalier, catálogo ELSON11016</td>
								<td>6</td>
								<td>pieza</td>
								<td>158.00</td>
								<td>948.00</td>
								<td class="text-center">
									<span class="icon_documents_alt"></span> 
									<span class="glyphicon glyphicon-pencil"></span> 
									<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>113</td>
								<td>Taqman SNP Asay Mto marca Applied Biosystems, catálogo 4351359</td>
								<td>3</td>
								<td>pieza</td>
								<td>7,254.00</td>
								<td>21,762.00</td>
								<td class="text-center">
									<span class="icon_documents_alt"></span> 
									<span class="glyphicon glyphicon-pencil"></span> 
									<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>  <!-- Fin partidas -->
				
				<div class="botones-guardar">
					<button class="btn btn-primary">Guardar sección</button>
					<button class="btn btn-primary">Guardar todo</button>
				</div>
			</div>
		</form>
	</section>
</section>