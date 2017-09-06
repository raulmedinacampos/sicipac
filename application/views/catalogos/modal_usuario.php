
<!-- Ventana modal para usuarios -->
<div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form id="formUsuarios" name="formUsuarios" method="post" action="">
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
							<label>Número de empleado:</label>
							<input type="text" id="numEmpleado" name="numEmpleado" class="form-control" placeholder="Número de empleado" />
							<input type="hidden" id="hdnID" name="hdnID" />
						</div>
						
						<div class="form-group col-md-6">
							<label>Puesto:</label>
							<select id="puesto" name="puesto" class="form-control">
								<option value="">Seleccione</option>
								<?php
								foreach ( $puestos as $val ) {
								?>
								<option value="<?php echo $val->IDPUESTO; ?>"><?php echo $val->PUESTO; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Área administrativa:</label>
							<select id="area" name="area" class="form-control">
								<option value="">Seleccione</option>
								<?php
								foreach ( $areas as $val ) {
								?>
								<option value="<?php echo $val->IDAREA; ?>"><?php echo $val->AREA; ?></option>
								<?php
								}
								?>
							</select>
						</div>
						
						<div class="form-group col-md-6">
							<label>Nombre:</label>
							<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del empleado" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Apellido paterno:</label>
							<input type="text" id="apPaterno" name="apPaterno" class="form-control" placeholder="Apellido paterno" />
						</div>
						
						<div class="form-group col-md-6">
							<label>Apellido materno:</label>
							<input type="text" id="apMaterno" name="apMaterno" class="form-control" placeholder="Apellido materno" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Extensión:</label>
							<input type="text" id="extension" name="extension" maxlength="8" class="form-control" placeholder="Extensión" />
						</div>
						
						<div class="form-group col-md-6">
							<label>Correo electrónico:</label>
							<div class="input-group">
								<input type="text" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" />
								<div class="input-group-addon">@cofaa.ipn.mx</div>
							</div>
						</div>
					</div>
					<div class="row div-btn-datos">
						<div class="form-group col-md-6">
							<button type="button" id="btnDatos" class="btn btn-default">Generar datos de usuario</button>
						</div>
					</div>
					<div class="row div-oculto">
						<div class="form-group col-md-6">
							<label>Nombre de usuario:</label>
							<input type="text" id="nomUsuario" name="nomUsuario" class="form-control" placeholder="Nombre de usuario" />
						</div>
						
						<div class="form-group col-md-6">
							<label>Contraseña:</label>
							<input type="text" id="password" name="password" class="form-control" placeholder="Contraseña" />
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
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Aceptar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>