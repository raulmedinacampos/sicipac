
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Proveedores</h2>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-9">
				<!-- Buscador -->
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1">
									<i class="icon_search"></i> Buscar proveedor
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<div class="panel-body">
								<form method="post" action="">
									<div class="form-group">
										<div class="row">
											<div class="col-md-8">
												<label>Razón social</label>
												<input type="text" class="form-control" placeholder="Razón social del proveedor" />
											</div>
											<div class="col-md-4">
												<label>RFC</label>
												<input type="text" class="form-control" placeholder="RFC" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-12 text-right">
												<button class="btn btn-default">Limpiar búsqueda</button>
												<button class="btn btn-primary">Buscar</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>  <!-- Termina buscador -->
			</div>
		
			<div class="col-md-3">
				<a id="btnNuevo" href="<?php echo base_url("proveedores/nuevo-proveedor"); ?>" class="btn btn-md btn-primary pull-right"> <span class="glyphicon glyphicon-plus"></span> Agregar proveedor</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<table id="registros" class="table table-striped table-advance table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>RFC</th>
								<th>Razón social</th>
								<th class="text-center">Representantes</th>
								<th class="text-center">Activo</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ( $proveedores as $val ) {
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $val->RFC; ?></td>
								<td><?php echo $val->RAZONSOCIAL; ?></td>
								<td class="text-center"><?php echo "2"; ?></td>
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
									<span title="Agregar proveedor" data-toggle="tooltip" class="glyphicon glyphicon-user" data-proveedor="<?php echo $val->IDPROVEEDOR; ?>"></span> 
									<span title="Editar" data-toggle="tooltip" class="glyphicon glyphicon-pencil" data-proveedor="<?php echo $val->IDPROVEEDOR; ?>"></span> 
									<span title="Eliminar" data-toggle="tooltip" class="glyphicon glyphicon-trash" data-proveedor="<?php echo $val->IDPROVEEDOR; ?>"></span>
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
		<form id="formEliminar" name="formEliminar" method="post" action="<?php echo base_url('proveedores/eliminar'); ?>">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">¿Eliminar proveedor?</h4>
				</div>
				<div class="modal-body">
					<p>¿Seguro que desea eliminar este proveedor?</p>
					<input type="hidden" id="idProveedor" name="idProveedor" />
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Aceptar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>