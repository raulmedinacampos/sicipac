
<!-- Ventana modal para firmas -->
<div class="modal fade" id="modalFirma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form id="formFirmas" name="formFirmas" method="post" action="">
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
							<label>Título:</label>
							<input type="text" id="titulo" name="titulo" maxlength="10" class="form-control" placeholder="Dr., C.P., Lic., etc." />
							<input type="hidden" id="hdnID" name="hdnID" />
						</div>
						<div class="form-group col-md-6">
							<label>Nombre(s):</label>
							<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del servidor" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Apellido paterno:</label>
							<input type="text" id="apPaterno" name="apPaterno" class="form-control" placeholder="Apellido paterno del servidor" />
						</div>
						<div class="form-group col-md-6">
							<label>Apellido materno:</label>
							<input type="text" id="apMaterno" name="apMaterno" class="form-control" placeholder="Apellido materno del servidor" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label>Nombre del cargo:</label>
							<input type="text" id="cargo" name="cargo" class="form-control" placeholder="Ingresa el cargo del servidor" />
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