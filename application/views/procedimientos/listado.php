
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Bases de procedimiento</h2>
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
									<i class="icon_search"></i> Buscar procedimiento
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<div class="panel-body">
								<form method="post" action="">
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label>Tipo de operación</label>
												<select class="form-control">
													<option value="">Selecciona tipo</option>
												</select>
											</div>
											<div class="col-md-2">
												<label>Clave</label>
												<input type="text" class="form-control" placeholder="Clave" />
											</div>
											<div class="col-md-6">
												<label>Nombre</label>
												<input type="text" class="form-control" placeholder="Nombre de procedimiento" />
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
				<a href="<?php echo base_url("procedimientos/nuevo-procedimiento"); ?>" class="btn btn-md btn-primary pull-right"> <span class="glyphicon glyphicon-plus"></span> Agregar procedimiento</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<table id="registros" class="table table-striped table-advance table-hover">
						<thead>
							<tr>
								<th><i class="icon_profile"></i> Full Name</th>
								<th><i class="icon_calendar"></i> Date</th>
								<th><i class="icon_mail_alt"></i> Email</th>
								<th><i class="icon_pin_alt"></i> City</th>
								<th><i class="icon_mobile"></i> Mobile</th>
								<th><i class="icon_cogs"></i> Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Angeline Mcclain</td>
								<td>2004-07-06</td>
								<td>dale@chief.info</td>
								<td>Rosser</td>
								<td>176-026-5992</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
										<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sung Carlson</td>
								<td>2011-01-10</td>
								<td>ione.gisela@high.org</td>
								<td>Robert Lee</td>
								<td>724-639-4784</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
										<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>Bryon Osborne</td>
								<td>2006-10-29</td>
								<td>sol.raleigh@language.edu</td>
								<td>York</td>
								<td>180-456-0056</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
										<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>Dalia Marquez</td>
								<td>2011-12-15</td>
								<td>angeline.frieda@thick.com</td>
								<td>Alton</td>
								<td>690-601-1922</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
										<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>Selina Fitzgerald</td>
								<td>2003-01-06</td>
								<td>moshe.mikel@parcelpart.info</td>
								<td>Waelder</td>
								<td>922-810-0915</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
										<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>Abraham Avery</td>
								<td>2006-07-14</td>
								<td>harvey.jared@pullpump.org</td>
								<td>Harker Heights</td>
								<td>511-175-7115</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
										<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>Caren Mcdowell</td>
								<td>2002-03-29</td>
								<td>valeria@hookhope.org</td>
								<td>Blackwell</td>
								<td>970-147-5550</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
										<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>Owen Bingham</td>
								<td>2013-04-06</td>
								<td>thomas.christopher@firstfish.info</td>
								<td>Rule</td>
								<td>934-118-6046</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
										<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>Ahmed Dean</td>
								<td>2008-03-19</td>
								<td>lakesha.geri.allene@recordred.com</td>
								<td>Darrouzett</td>
								<td>338-081-8817</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
										<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>Mario Norris</td>
								<td>2010-02-08</td>
								<td>mildred@hour.info</td>
								<td>Amarillo</td>
								<td>945-547-5302</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
										<a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
			</div>
		</div>
	</section>
</section>