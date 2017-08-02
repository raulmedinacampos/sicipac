
<!-- Ventana modal para áreas administrativas -->
<div class="modal fade" id="modalArea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form id="formAreas" name="formAreas" method="post" action="">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Agregar área administrativa</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label>Nombre del área:</label>
							<input type="text" id="area" name="area" class="form-control" placeholder="Ingresa el nombre del área" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label>Siglas:</label>
							<input type="text" id="siglas" name="siglas" class="form-control" placeholder="Siglas del área" />
						</div>
						
						<div class="form-group col-md-8">
							<label>Depende de:</label>
							<select id="areaPadre" name="areaPadre" class="form-control">
								<option value="">Seleccione</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label>Descripción:</label>
							<textarea id="descripcion" name="descripcion" rows="3" class="form-control" placeholder="Descripción"></textarea>
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