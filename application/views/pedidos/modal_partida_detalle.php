
<!-- Ventana modal para detalle de partidas -->
<div class="modal fade" id="modalDetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form method="post" action="">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Detalle de la partida</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label>Número de partida:</label>
								<input type="text" class="form-control" readonly="readonly" value="87" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label>Descripción corta:</label>
								<input type="text" class="form-control" readonly="readonly" value="Picnómetro de 10 milímetros marca Kavalier, catálogo ELSON11016" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label>Descripción:</label>
								<textarea rows="5" cols="" class="form-control" readonly="readonly">(Tipo Gay Lusacc), fabricado en vidrio de borocilicato con tapón esmerilado NS 10/19</textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="panel panel-default">
							<table class="table table-condensed table-striped">
								<tr>
									<th>Locación</th>
									<th>Cantidad</th>
									<th>Unidad</th>
								</tr>
								<tr>
									<td class="text-nowrap">CECyT 18</td>
									<td>3</td>
									<td>pieza</td>
								</tr>
								<tr>
									<td class="text-nowrap">ESIM</td>
									<td>3</td>
									<td>pieza</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Precio unitario neto:</label>
								<div class="input-group">
									<div class="input-group-addon">$</div>
									<input type="text" class="form-control" readonly="readonly" value="158.00" />
								</div>
							</div>
							<div class="col-md-6">
								<label>Precio total neto:</label>
								<div class="input-group">
									<div class="input-group-addon">$</div>
									<input type="text" class="form-control" readonly="readonly" value="948.00" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</form>
	</div>
</div>