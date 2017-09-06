
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Catálogo de leyendas</h2>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<a href="#" class="btn btn-md btn-primary" id="btn-leyenda"> <span class="glyphicon glyphicon-plus"></span> Agregar leyenda</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<table id="registros" class="table table-striped table-advance table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Sección</th>
								<th>Leyenda</th>
								<th class="text-center">Activo</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ( $leyendas as $val ) {
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $val->SECCION; ?></td>
								<td><?php echo $val->LEYENDA; ?></td>
								<td class="text-center">
									<?php
									if ( $val->ACTIVO == "S" ) {
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
									<span class="glyphicon glyphicon-pencil" data-leyenda="<?php echo $val->IDLEYENDA; ?>"></span> 
									<span class="glyphicon glyphicon-trash" data-leyenda="<?php echo $val->IDLEYENDA; ?>"></span>
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
		<form id="formEliminar" name="formEliminar" method="post" action="<?php echo base_url('configuracion/leyendas/eliminar'); ?>">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">¿Eliminar leyenda?</h4>
				</div>
				<div class="modal-body">
					<p>¿Seguro que desea eliminar esta leyenda?</p>
					<input type="hidden" id="idLeyenda" name="idLeyenda" />
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Aceptar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>