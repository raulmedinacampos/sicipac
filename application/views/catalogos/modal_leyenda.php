
<!-- Ventana modal para firmas -->
<div class="modal fade" id="modalLeyenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form id="formLeyendas" name="formLeyendas" method="post" action="">
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
							<label>Clave:</label>
							<input type="text" id="clave" name="clave" maxlength="20" class="form-control" placeholder="Identificador de la leyenda" />
							<input type="hidden" id="hdnID" name="hdnID" />
						</div>
						<div class="form-group col-md-6">
							<label>Sección:</label>
							<input type="text" id="seccion" name="seccion" maxlength="30" class="form-control" placeholder="Sección a la que pertenece" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label>Leyenda:</label>
							<textarea id="leyenda" name="leyenda" rows="3" class="form-control" placeholder="Ingresa el texto"></textarea>
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