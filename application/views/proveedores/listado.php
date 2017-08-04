
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
				<a href="<?php echo base_url("proveedores/nuevo-proveedor"); ?>" class="btn btn-md btn-primary pull-right"> <span class="glyphicon glyphicon-plus"></span> Agregar proveedor</a>
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
								<th class="text-center">Activo</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>CMS0904253R8</td>
								<td>COMPU SOFTWARE, S.A. DE C.V.</td>
								<td class="text-center">
									<?php
									if ( 1 == 1 ) {
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
									<span class="glyphicon glyphicon-pencil"></span> 
									<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
			</div>
		</div>
	</section>
</section>