
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Catálogo de áreas administrativas</h2>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<a href="#" class="btn btn-md btn-primary" id="btn-area"> <span class="glyphicon glyphicon-plus"></span> Agregar área</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<table id="registros" class="table table-striped table-advance table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Siglas</th>
								<th>Área administrativa</th>
								<th class="text-center">Activo</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>UDS</td>
								<td>Unidad de Desarrollo de Sistemas</td>
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