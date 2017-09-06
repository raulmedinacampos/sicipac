
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Catálogo de unidades responsables</h2>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<a href="#" class="btn btn-md btn-primary" id="btn-unidad"> <span class="glyphicon glyphicon-plus"></span> Agregar unidad</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<table id="registros" class="table table-striped table-advance table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Clave</th>
								<th>Siglas</th>
								<th>Unidad responsable</th>
								<th class="text-center">Activo</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ( $unidades as $val ) {
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $val->CLAVE; ?></td>
								<td><?php echo $val->SIGLAS; ?></td>
								<td><?php echo $val->UNIRESPONSABLE; ?></td>
								<td class="text-center">
									<?php
									if ( $val->ACTIVO == "S") {
									?>
									<span class="glyphicon glyphicon-ok text-success"></span>
									<?php
									} else {
									?>
									<span class="glyphicon glyphicon-remove text-danger"></span>
									<?php
									}
									?>
								</td>
								<td class="text-center">
									<span class="glyphicon glyphicon-pencil" data-unidad="<?php echo $val->IDUNIRESPONSABLE; ?>"></span> 
									<span class="glyphicon glyphicon-trash" data-unidad="<?php echo $val->IDUNIRESPONSABLE; ?>"></span>
								</td>
							</tr>
							<?php
								$i++;
							}
							?>
						</tbody>
					</table>
				</section>
			</div>
		</div>
	</section>
</section>

<!-- Ventana modal para mensaje de confirmación -->
<div class="modal fade" id="modalConf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<form id="formEliminar" name="formEliminar" method="post" action="<?php echo base_url('configuracion/unidades-responsables/eliminar'); ?>">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">¿Eliminar unidad responsable?</h4>
				</div>
				<div class="modal-body">
					<p>¿Seguro que desea eliminar esta unidad responsable?</p>
					<input type="hidden" id="idUnidad" name="idUnidad" />
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Aceptar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>