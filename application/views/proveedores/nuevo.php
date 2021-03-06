
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<?php
				$accion = "";
				
				$accion = (isset($proveedor)) ? "Editar" : "Nuevo";
				?>
				<h2 class="page-header"><?php echo $accion; ?> proveedor</h2>
			</div>
		</div>
		
		<!-- Pestañas -->
		<ul class="nav nav-tabs nav-justified" role="tablist">
			<li role="presentation" class="active"><a href="#generales" aria-controls="generales" role="tab" data-toggle="tab">Generales</a></li>
			<li role="presentation"><a href="#representantes" aria-controls="representantes" role="tab" data-toggle="tab">Representantes</a></li>
		</ul>
		
		<!-- Paneles -->
		<form id="formProveedores" name="formProveedores" method="post" action="<?php echo base_url('proveedores/agregar'); ?>">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="generales">
					<div class="row">
						<div class="form-group col-md-6">
							<label>Tipo de contribuyente:</label>
							<select id="tipoContribuyente" name="tipoContribuyente" class="form-control">
								<option value="">Selecciona tipo</option>
								<option value="pf" <?php if(isset($proveedor) && $proveedor->TIPOCONTRIBUYENTE == "pf") echo 'selected="selected"'; ?>>Persona física</option>
								<option value="pm" <?php if(isset($proveedor) && $proveedor->TIPOCONTRIBUYENTE == "pm") echo 'selected="selected"'; ?>>Persona moral</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label>RFC:</label>
							<input type="text" id="rfc" name="rfc" class="form-control" value="<?php if(isset($proveedor)) echo $proveedor->RFC; ?>" placeholder="Ingresa RFC" />
						</div>
					</div>
					<div class="row div-oculto p-fisica">
						<div class="form-group col-md-6">
							<label>Nombre:</label>
							<input type="text" id="nombre" name="nombre" class="form-control" value="<?php if(isset($proveedor)) echo $proveedor->NOMBRE; ?>" placeholder="Ingresa clave" />
						</div>
						<div class="form-group col-md-6">
							<label>Apellido paterno:</label>
							<input type="text" id="apPaterno" name="apPaterno" class="form-control" value="<?php if(isset($proveedor)) echo $proveedor->APPATERNO; ?>" placeholder="Ingresa clave" />
						</div>
					</div>
					<div class="row div-oculto p-fisica">
						<div class="form-group col-md-6">
							<label>Apellido materno:</label>
							<input type="text" id="apMaterno" name="apMaterno" class="form-control" value="<?php if(isset($proveedor)) echo $proveedor->APMATERNO; ?>" placeholder="Ingresa clave" />
						</div>
					</div>
					<div class="row div-oculto p-moral">
						<div class="form-group col-md-12">
							<label>Razón social:</label>
							<input type="text" id="razonSocial" name="razonSocial" class="form-control" value="<?php if(isset($proveedor)) echo $proveedor->RAZONSOCIAL; ?>" placeholder="Ingresa clave" />
						</div>
					</div>
					
					<hr class="estilo1" />
					
					<div class="row">
						<div class="form-group col-md-6">
							<label>Código postal:</label>
							<input type="text" id="cp" name="cp" maxlength="5" class="form-control" value="<?php if(isset($proveedor)) echo $proveedor->CODIGOPOSTAL; ?>" placeholder="Código postal" />
						</div>
						
						<div class="form-group col-md-6">
							<label>Colonia:</label>
							<div class="dropdown">
								<input type="text" id="colonia" name="colonia" class="form-control" value="<?php if(isset($proveedor)) echo $proveedor->COLONIA; ?>" placeholder="Colonia" />
								<ul class="dropdown-menu dropdown-colonia"></ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label>Calle:</label>
							<input type="text" id="calle" name="calle" class="form-control" value="<?php if(isset($proveedor)) echo $proveedor->CALLE; ?>" placeholder="Calle" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Número exterior:</label>
							<input type="text" id="numExt" name="numExt" class="form-control" value="<?php if(isset($proveedor)) echo $proveedor->NUMEXTERIOR; ?>" placeholder="Número exterior" />
						</div>
						
						<div class="form-group col-md-6">
							<label>Número interior:</label>
							<input type="text" id="numInt" name="numInt" class="form-control" value="<?php if(isset($proveedor)) echo $proveedor->NUMINTERIOR; ?>" placeholder="Número interior" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Entidad federativa:</label>
							<select id="entidad" name="entidad" class="form-control">
								<option value="">Seleccione</option>
								<?php
								foreach ( $entidades as $val ) {
								?>
								<option value="<?php echo $val->IDENTIDAD; ?>" <?php if(isset($proveedor) && $proveedor->ENTIDAD == $val->IDENTIDAD) echo 'selected="selected"'; ?>><?php echo $val->ENTIDAD; ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label>Delegación o municipio:</label>
							<select id="municipio" name="municipio" class="form-control">
								<option value="">Seleccione</option>
							</select>
						</div>
					</div>
					<div class="botones-guardar">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>  <!-- Fin generales -->
				<div role="tabpanel" class="tab-pane" id="representantes">
					<div class="form-group">
						<button type="button" id="btnNuevoRepresentante" class="btn btn-md btn-default"> <span class="glyphicon glyphicon-plus"></span> Nuevo representante</button>
					</div>
					<table id="registros" class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Tipo</th>
								<th>Contacto</th>
								<th class="text-center">Activo</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Jesús Hernández López</td>
								<td>Representante comercial</td>
								<td>(55) 5611 0000</td>
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
									<span class="glyphicon glyphicon-pencil" data-rep=""></span> 
									<span class="glyphicon glyphicon-trash" data-rep=""></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>  <!-- Fin representantes -->
			</div>
		</form>
	</section>
</section>

<!-- Ventana modal para mensaje de confirmación -->
<div class="modal fade" id="modalConf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<form id="formEliminar" name="formEliminar" method="post" action="<?php echo base_url(''); ?>">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">¿Eliminar representante?</h4>
				</div>
				<div class="modal-body">
					<p>¿Seguro que desea eliminar este representante?</p>
					<input type="hidden" id="idRepresentante" name="idRepresentante" />
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Aceptar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>