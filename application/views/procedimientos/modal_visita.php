
<!-- Ventana modal para visitas -->
<div class="modal fade" id="modalVisita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<form method="post" action="">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Agregar visita</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Fecha y hora:</label>
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
								<label>Partidas:</label>
								<input type="text" class="form-control" placeholder="Ingrese las partidas" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Escuela, centro o unidad:</label>
								<input type="text" class="form-control" placeholder="Nombre de la escuela, centro o unidad" />
							</div>
							<div class="col-md-6">
								<label>Responsable adquisiciones:</label>
								<input type="text" class="form-control" placeholder="Nombre del responsable" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Responsable del área usuaria:</label>
								<input type="text" class="form-control" placeholder="Nombre del responsable" />
							</div>
							<div class="col-md-6">
								<label>Responsable técnica:</label>
								<input type="text" class="form-control" placeholder="Nombre del responsable" />
							</div>
						</div>
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