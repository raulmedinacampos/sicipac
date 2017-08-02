
<!-- Ventana modal para partidas -->
<div class="modal fade" id="modalPartida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<form method="post" action="">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Agregar partida</h4>
				</div>
				<div class="modal-body">
					<!-- Pestañas -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#p_generales" aria-controls="p_generales" role="tab" data-toggle="tab">Generales</a></li>
						<li role="presentation"><a href="#p_descripcion" aria-controls="p_descripcion" role="tab" data-toggle="tab">Descripción</a></li>
						<li role="presentation"><a href="#p_localidades" aria-controls="p_localidades" role="tab" data-toggle="tab">Localidades</a></li>
					</ul>
					
					<!-- Paneles -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="p_generales">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Partida número: 1</label>
									</div>
									<div class="col-md-6">
										<label>Lote:</label>
										<input type="text" class="form-control" placeholder="Ingresa lote" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<label>Descripción corta:</label>
										<input type="text" class="form-control" placeholder="Ingresa descripción" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Unidad:</label>
										<select class="form-control">
											<option value="">Selecciona unidad</option>
										</select>
									</div>
									<div class="col-md-6">
										<label>Cantidad:</label>
										<input type="text" class="form-control" placeholder="Ingresa cantidad" />
									</div>
								</div>
							</div>
						</div>  <!-- Fin p_generales -->
						<div role="tabpanel" class="tab-pane" id="p_descripcion">
							<textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
						</div>  <!-- Fin p_descripcion -->
						<div role="tabpanel" class="tab-pane" id="p_localidades">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Lugar / ECU's:</label>
										<select class="form-control">
											<option value="">Selecciona lugar</option>
										</select>
									</div>
									<div class="col-md-6">
										<label>Aula o taller:</label>
										<input type="text" class="form-control" placeholder="Ingresa el aula o sala" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Cantidad total: 8</label>
									</div>
									<div class="col-md-6">
										<button class="btn btn-default">Agregar</button>
									</div>
								</div>
							</div>
							
							<hr class="estilo1">
							
							<table class="table">
								<thead>
									<tr>
										<th>ECU's</th>
										<th>Aula</th>
										<th class="text-center">Cantidad</th>
										<th class="text-center">Eliminar</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>CENLEX Zacatenco</td>
										<td>Salón 101</td>
										<td class="text-center">2</td>
										<td class="text-center">
                                        	<span class="glyphicon glyphicon-trash"></span>
										</td>
									</tr>
									<tr>
										<td>CENLEX Zacatenco</td>
										<td>Salón 201</td>
										<td class="text-center">1</td>
										<td class="text-center">
                                        	<span class="glyphicon glyphicon-trash"></span>
										</td>
									</tr>
									<tr>
										<td>CENLEX Zacatenco</td>
										<td>Salón 301</td>
										<td class="text-center">1</td>
										<td class="text-center">
                                        	<span class="glyphicon glyphicon-trash"></span>
										</td>
									</tr>
									<tr>
										<td>CENLEX Santo Tomas</td>
										<td>Salón 101</td>
										<td class="text-center">2</td>
										<td class="text-center">
                                        	<span class="glyphicon glyphicon-trash"></span>
										</td>
									</tr>
									<tr>
										<td>CENLEX Santo Tomas</td>
										<td>Salón 102</td>
										<td class="text-center">2</td>
										<td class="text-center">
                                        	<span class="glyphicon glyphicon-trash"></span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>  <!-- Fin p_localidades -->
					</div> <!-- /.tab-content -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Aceptar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>