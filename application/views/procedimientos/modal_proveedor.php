
<!-- Ventana modal para participantes -->
<div class="modal fade" id="modalProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<form method="post" action="">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Agregar proveedor</h4>
				</div>
				<div class="modal-body">
					<!-- Pestañas -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#par_generales" aria-controls="par_generales" role="tab" data-toggle="tab">Generales</a></li>
						<li role="presentation"><a href="#par_documentos" aria-controls="par_documentos" role="tab" data-toggle="tab">Documentos</a></li>
					</ul>
					
					<!-- Paneles -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="par_generales">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Nombre:</label>
										<input type="text" class="form-control" placeholder="Ingresa nombre" />
									</div>
									<div class="col-md-6">
										<label>RFC:</label>
										<input type="text" class="form-control" placeholder="Ingresa RFC" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Representante legal:</label>
										<input type="text" class="form-control" placeholder="Ingresa representante" />
									</div>
									<div class="col-md-6">
										<label>Representante comercial:</label>
										<input type="text" class="form-control" placeholder="Ingresa representante" />
									</div>
								</div>
							</div>
						</div>  <!-- Fin par_generales -->
						<div role="tabpanel" class="tab-pane" id="par_documentos">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Documento:</label>
										<select class="form-control">
											<option>Selecciona</option>
										</select>
									</div>
									<div class="col-md-6">
										<label>Adjuntar documento:</label>
										<input type="file" id="fileDocumento" />
									</div>
								</div>
							</div>
							
							<hr class="estilo1">
							
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Documento</th>
										<th class="text-center">Entregado</th>
										<th class="text-center">Aceptado</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Registro Federal de Contribuyente</td>
										<td class="text-center">
											<input type="checkbox" />
										</td>
										<td class="text-center">
											<input type="checkbox" />
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Clave Única de Registro de Población</td>
										<td class="text-center">
											<input type="checkbox" />
										</td>
										<td class="text-center">
											<input type="checkbox" />
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Acta Constitutiva</td>
										<td class="text-center">
											<input type="checkbox" />
										</td>
										<td class="text-center">
											<input type="checkbox" />
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Identificación del Representante Legal</td>
										<td class="text-center">
											<input type="checkbox" />
										</td>
										<td class="text-center">
											<input type="checkbox" />
										</td>
									</tr>
								</tbody>
							</table>
						</div>  <!-- Fin par_documentos -->
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