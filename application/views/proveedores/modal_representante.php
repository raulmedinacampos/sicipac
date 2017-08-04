
<!-- Ventana modal para proveedores -->
<div class="modal fade" id="modalRepresentante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form id="formRepresentantes" name="formRepresentantes" method="post" action="">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel"></h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-6">
							<label>Tipo de representante:</label>
							<select id="tipo" name="tipo" class="form-control">
								<option value="">Selecciona</option>
							</select>
							<input type="hidden" id="hdnID" name="hdnID" />
						</div>
						<div class="form-group col-md-6">
							<label>Nombre:</label>
							<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa el nombre" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Apellido paterno:</label>
							<input type="text" id="apPaterno" name="apPaterno" class="form-control" placeholder="Ingresa el apellido paterno" />
						</div>
						<div class="form-group col-md-6">
							<label>Apellido materno:</label>
							<input type="text" id="apMaterno" name="apMaterno" class="form-control" placeholder="Ingresa el apellido materno" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Teléfono de oficina:</label>
							<input type="text" id="telOficina" name="telOficina" class="form-control" placeholder="Teléfono de oficina" />
						</div>
						<div class="form-group col-md-6">
							<label>Celular:</label>
							<input type="text" id="celular" name="celular" class="form-control" placeholder="Teléfono celular" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Correo electrónico:</label>
							<input type="text" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" />
						</div>
					</div>
					<div class="row div-btn-contacto">
						<div class="form-group col-md-6">
							<button type="button" id="btnContacto" class="btn btn-default">Agregar forma de contacto</button>
						</div>
					</div>
					<div class="row div-oculto">
						<div class="form-group col-md-6">
							<label>Forma de contacto:</label>
							<select id="formaContacto" name="formaContacto" class="form-control">
								<option value="">Selecciona</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label>Contacto:</label>
							<input id="contacto" name="contacto" type="text" class="form-control" placeholder="Ingresa el teléfono o correo" />
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label>Activo</label>
						</div>
						<div class="form-group col-md-6">
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-switch active">
									<input type="radio" name="activo" id="activoS" value="S" checked="checked" autocomplete="off"> Sí
								</label>
								<label class="btn btn-switch">
									<input type="radio" name="activo" id="activoN" value="N" autocomplete="off"> No
								</label>
							</div>
						</div>
					</div>
					
					<div class="tabla-contacto">
						<hr class="estilo1">
								
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Forma de contacto</th>
									<th>Contacto</th>
									<th class="text-center">Acciones</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Teléfono celular</td>
									<td>(55) 5555 0000</td>
									<td class="text-center">
										<span class="glyphicon glyphicon-pencil" data-contacto=""></span> 
										<span class="glyphicon glyphicon-trash" data-contacto=""></span>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Teléfono de oficina</td>
									<td>(55) 5555 0000 ext. 1540</td>
									<td class="text-center">
										<span class="glyphicon glyphicon-pencil" data-contacto=""></span> 
										<span class="glyphicon glyphicon-trash" data-contacto=""></span>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Correo electrónico</td>
									<td>correo@miempresa.com</td>
									<td class="text-center">
										<span class="glyphicon glyphicon-pencil" data-contacto=""></span> 
										<span class="glyphicon glyphicon-trash" data-contacto=""></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Aceptar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>