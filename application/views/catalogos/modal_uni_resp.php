
<!-- Ventana modal para unidades responsables -->
<div class="modal fade" id="modalUnidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form id="formUnidades" name="formUnidades" method="post" action="">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Agregar unidad responsable</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-6">
							<label>Clave:</label>
							<input type="text" id="clave" name="clave" class="form-control" placeholder="Clave de la unidad" />
						</div>
						
						<div class="form-group col-md-6">
							<label>Siglas:</label>
							<input type="text" id="siglas" name="siglas" class="form-control" placeholder="Siglas de la unidad" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label>Nombre de la unidad responsable:</label>
							<input type="text" id="unidad" name="unidad" class="form-control" placeholder="Ingresa el nombre de la unidad" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Código postal:</label>
							<input type="text" id="cp" name="cp" class="form-control" placeholder="Código postal" />
						</div>
						
						<div class="form-group col-md-6">
							<label>Colonia:</label>
							<input type="text" id="colonia" name="colonia" class="form-control" placeholder="Colonia" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label>Calle:</label>
							<input type="text" id="calle" name="calle" class="form-control" placeholder="Calle" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Número exterior:</label>
							<input type="text" id="numExt" name="numExt" class="form-control" placeholder="Número exterior" />
						</div>
						
						<div class="form-group col-md-6">
							<label>Número interior:</label>
							<input type="text" id="numInt" name="numInt" class="form-control" placeholder="Número interior" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Delgación o municipio:</label>
							<select id="municipio" name="municipio" class="form-control">
								<option value="">Seleccione</option>
							</select>
						</div>
						
						<div class="form-group col-md-6">
							<label>Entidad federativa:</label>
							<select id="entidad" name="entidad" class="form-control">
								<option value="">Seleccione</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label>Activo</label>
						</div>
						<div class="form-group col-md-6">
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-switch active">
									<input type="radio" name="activo" id="activoS" value="1" checked="checked" autocomplete="off"> Sí
								</label>
								<label class="btn btn-switch">
									<input type="radio" name="activo" id="activoN" value="0" autocomplete="off"> No
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