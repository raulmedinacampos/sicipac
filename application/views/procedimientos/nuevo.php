
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Nuevo procedimiento</h2>
			</div>
		</div>
		
		<!-- Pestañas -->
		<ul class="nav nav-tabs nav-justified" role="tablist">
			<li role="presentation" class="active"><a href="#generales" aria-controls="generales" role="tab" data-toggle="tab">Generales</a></li>
			<li role="presentation"><a href="#publicaciones" aria-controls="publicaciones" role="tab" data-toggle="tab">Publicaciones</a></li>
			<li role="presentation"><a href="#visitas" aria-controls="visitas" role="tab" data-toggle="tab">Visitas</a></li>
			<li role="presentation"><a href="#aclaraciones" aria-controls="aclaraciones" role="tab" data-toggle="tab">Aclaraciones</a></li>
			<li role="presentation"><a href="#partidas" aria-controls="partidas" role="tab" data-toggle="tab">Partidas</a></li>
			<li role="presentation"><a href="#proveedores" aria-controls="proveedores" role="tab" data-toggle="tab">Proveedores</a></li>
		</ul>
		
		<!-- Paneles -->
		<form method="post" action="">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="generales">
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Tipo de operación:</label>
								<select class="form-control">
									<option value="">Selecciona tipo</option>
									<?php
									foreach ($tipo_operacion as $val) {
									?>
									<option value="<?php echo $val->CCVLICI; ?>"><?php echo $val->CLICITA; ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="col-md-6">
								<label>Procedencia:</label>
								<select class="form-control">
									<option value="">Selecciona procedencia</option>
									<?php
									foreach ($procedencia as $val) {
									?>
									<option value="<?php echo $val->NORIGEN; ?>"><?php echo $val->CDESCRI; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Caracter del procedimiento:</label>
								<select class="form-control">
									<option value="">Selecciona tipo</option>
									<?php
									foreach ($caracter_procedimiento as $val) {
									?>
									<option value="<?php echo $val->IDTIPOPROCEDIMIENTO; ?>"><?php echo $val->TIPOPROCEDIMIENTO; ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="col-md-6">
								<label>Número del procedimiento:</label>
								<input type="text" class="form-control" placeholder="Ingresa clave" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label>Descripción del procedimiento:</label>
								<input type="text" class="form-control" placeholder="Ingresa nombre" />
							</div>
						</div>
					</div>
					
					<hr class="estilo1" />
					
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Fecha de invitación:</label>
								<div class="input-group date datepicker">
									<input type="text" class="form-control" placeholder="Ingresa fecha" />
									<div class="input-group-addon"><i class="icon_calendar"></i></div>
								</div>
							</div>
							<div class="col-md-6">
								<label>Fecha y hora de apertura:</label>
								<div class="row">
									<div class="col-md-6">
										<div class="input-group date datepicker">
											<input type="text" class="form-control" placeholder="Ingresa fecha" />
											<div class="input-group-addon"><i class="icon_calendar"></i></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group date timepicker">
											<input type="text" class="form-control" placeholder="Ingresa horario" />
											<div class="input-group-addon"><i class="icon_clock_alt"></i></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Fecha y hora de fallo:</label>
								<div class="row">
									<div class="col-md-6">
										<div class="input-group date datepicker">
											<input type="text" class="form-control" placeholder="Ingresa fecha" />
											<div class="input-group-addon"><i class="icon_calendar"></i></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group date timepicker">
											<input type="text" class="form-control" placeholder="Ingresa horario" />
											<div class="input-group-addon"><i class="icon_clock_alt"></i></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<label>Fecha de formalización:</label>
								<div class="input-group date datepicker">
									<input type="text" class="form-control" placeholder="Ingresa fecha" />
									<div class="input-group-addon"><i class="icon_calendar"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Período de ejecución del servicio:</label>
								<div class="row">
									<div class="col-md-6">
										<div class="input-group date datepicker">
											<input type="text" class="form-control" placeholder="Ingresa fecha" />
											<div class="input-group-addon"><i class="icon_calendar"></i></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group date datepicker">
											<input type="text" class="form-control" placeholder="Ingresa fecha" />
											<div class="input-group-addon"><i class="icon_calendar"></i></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>  <!-- Fin generales -->
				<div role="tabpanel" class="tab-pane" id="publicaciones">
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Publicación CompraNET:</label>
								<div class="input-group date datepicker">
									<input type="text" class="form-control" placeholder="Ingresa fecha" />
									<div class="input-group-addon"><i class="icon_calendar"></i></div>
								</div>
							</div>
							<div class="col-md-6">
								<label>Publicación Diario Oficial:</label>
								<div class="input-group date datepicker">
									<input type="text" class="form-control" placeholder="Ingresa fecha" />
									<div class="input-group-addon"><i class="icon_calendar"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Publicación página COFAA:</label>
								<div class="input-group date datepicker">
									<input type="text" class="form-control" placeholder="Ingresa fecha" />
									<div class="input-group-addon"><i class="icon_calendar"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="visitas">
					<div class="form-group">
						<button type="button" id="btnNuevaVisita" class="btn btn-md btn-default" data-toggle="modal" data-target="#modalVisita"> <span class="glyphicon glyphicon-plus"></span> Nueva visita</button>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Fecha</th>
								<th>Lugar / ECU's</th>
								<th>Partidas</th>
								<th>Responsable</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>02/03/2017</td>
								<td>ESIME Unidad Zacatenco</td>
								<td>14, 15, 24</td>
								<td>Ricardo Sánchez Estrada</td>
								<td class="text-center">
									<span class="glyphicon glyphicon-pencil"></span> 
									<span class="icon_documents_alt"></span> 
									<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
							<tr>
								<td>02/03/2017</td>
								<td>ESIME Culhuacan</td>
								<td>1, 23</td>
								<td>Victor Cuadros Lopez</td>
								<td class="text-center">
									<span class="glyphicon glyphicon-pencil"></span> 
									<span class="icon_documents_alt"></span> 
									<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>  <!-- Fin visitas -->
				<div role="tabpanel" class="tab-pane" id="aclaraciones">
					<div class="col-md-5">
						<div class="form-group">
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-switch">
									<input type="radio" name="aclaraciones" id="aclaracionesS" value="1" /> 
									Sí
								</label>
								<label class="btn btn-switch active">
									<input type="radio" name="aclaraciones" id="aclaracionesN" value="0" checked="checked" /> 
									No
								</label>
							</div>
							<label>Recibir aclaraciones</label>
						</div>
						<div class="form-group div-aclaracion">
							<label>Fecha y hora de reunión:</label>
							<div class="row">
								<div class="form-group col-md-12">
									<div class="input-group date datepicker">
										<input type="text" class="form-control" placeholder="Ingresa fecha" />
										<div class="input-group-addon"><i class="icon_calendar"></i></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group date timepicker">
										<input type="text" class="form-control" placeholder="Ingresa horario" />
										<div class="input-group-addon"><i class="icon_clock_alt"></i></div>
									</div>
								</div>
							</div>
						</div>
					</div>
						
					<div class="col-md-5 div-aclaracion">
						<div class="form-group">
							<button type="button" id="btnNuevoCorreo" class="btn btn-md btn-default" data-toggle="modal" data-target="#modalCorreo"> <span class="glyphicon glyphicon-plus"></span> Nuevo correo</button>
						</div>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">Correos para aclaraciones</h4>
							</div>
							<table class="table">
								<tbody>
									<tr>
										<td>vcuadros@cofaa.ipn.mx</td>
										<td><span class="glyphicon glyphicon-trash"></span></td>
									</tr>
									<tr>
										<td>restrada@cofaa.ipn.mx</td>
										<td><span class="glyphicon glyphicon-trash"></span></td>
									</tr>
									<tr>
										<td>naranda@cofaa.ipn.mx</td>
										<td><span class="glyphicon glyphicon-trash"></span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>  <!-- Fin aclaraciones -->
				<div role="tabpanel" class="tab-pane" id="partidas">
					<div class="form-group">
						<button type="button" id="btnNuevaPartida" class="btn btn-md btn-default" data-toggle="modal" data-target="#modalPartida"> <span class="glyphicon glyphicon-plus"></span> Nueva partida</button>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Descripción corta</th>
								<th>Unidad</th>
								<th>Cantidad</th>
								<th class="text-center">Detalle</th>
								<th class="text-center">Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Lápiz HB</td>
								<td>caja</td>
								<td>25</td>
								<td class="text-center">
									<span class="icon_documents_alt"></span> 
								</td>
								<td class="text-center">
									<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
							<tr>
								<td class="w3-center">2</td>
								<td>Lápiz 2B</td>
								<td class="w3-center">caja</td>
								<td class="w3-center">30</td>
								<td class="text-center">
									<span class="icon_documents_alt"></span>
								</td>
								<td class="text-center">
									<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>  <!-- Fin partidas -->
				<div role="tabpanel" class="tab-pane" id="proveedores">
					<div class="form-group">
						<button type="button" id="btnNuevoProveedor" class="btn btn-md btn-default" data-toggle="modal" data-target="#modalProveedor"> <span class="glyphicon glyphicon-plus"></span> Nuevo proveedor</button>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>RFC</th>
								<th class="text-center">Partidas</th>
								<th class="text-center">Modificar</th>
								<th class="text-center">Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Papelería Express SA de CV</td>
								<td>PAP980101XYZ</td>
								<td class="text-center">
									<span class="icon_documents_alt"></span>
								</td>
								<td class="text-center">
									<span class="glyphicon glyphicon-pencil"></span>
								</td>
								<td class="text-center">
									<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Proveedores de oficinas SA de CV</td>
								<td>PRO080507ABC</td>
								<td class="text-center">
									<span class="icon_documents_alt"></span>
								</td>
								<td class="text-center">
									<span class="glyphicon glyphicon-pencil"></span>
								</td>
								<td class="text-center">
									<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Surtidora de empresas SA de CV</td>
								<td>SUR051231FGH</td>
								<td class="text-center">
									<span class="icon_documents_alt"></span>
								</td>
								<td class="text-center">
									<span class="glyphicon glyphicon-pencil"></span>
								</td>
								<td class="text-center">
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