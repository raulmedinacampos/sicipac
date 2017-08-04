
<!-- Ventana modal para unidades de medida -->
<div class="modal fade" id="modalUnidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form id="formUnidades" name="formPuestos" method="post" action="">
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
						<div class="form-group col-md-12">
							<label>Nombre de la unidad:</label>
							<input type="text" id="unidad" name="unidad" class="form-control" placeholder="Ingresa el nombre de la unidad" />
							<input type="hidden" id="hdnID" name="hdnID" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Abreviatura:</label>
							<input type="text" id="abreviatura" name="abreviatura" class="form-control" placeholder="Abreviatura de la unidad" />
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