
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Configuración de cuenta</h2>
			</div>
		</div>
		
		<form action="">
			<div class="row">
				<div class="form-group col-md-6">
					<label>Número de empleado</label>
					<input id="" name="" type="text" class="form-control" disabled="disabled" value="dasdasdas" />
				</div>
				<div class="form-group col-md-6">
					<label>Nombre</label>
					<input id="" name="" type="text" class="form-control" disabled="disabled" value="dasdasdas" />
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-6">
					<label>Apellido paterno</label>
					<input id="" name="" type="text" class="form-control" disabled="disabled" value="dasdasdas" />
				</div>
				<div class="form-group col-md-6">
					<label>Apellido materno</label>
					<input id="" name="" type="text" class="form-control" disabled="disabled" value="dasdasdas" />
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-6">
					<label>Puesto</label>
					<input id="" name="" type="text" class="form-control" disabled="disabled" value="dasdasdas" />
				</div>
				<div class="form-group col-md-6">
					<label>Área</label>
					<input id="" name="" type="text" class="form-control" disabled="disabled" value="dasdasdas" />
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-6">
					<label>Extensión</label>
					<input id="" name="" type="text" class="form-control" disabled="disabled" value="dasdasdas" />
				</div>
				<div class="form-group col-md-6">
					<label>Correo electrónico</label>
					<input id="" name="" type="text" class="form-control" disabled="disabled" value="dasdasdas" />
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-6">
					<label>Nueva contraseña</label>
					<input id="" name="" type="text" class="form-control" placeholder="Nueva contraseña" />
				</div>
				<div class="form-group col-md-6">
					<label>Confirmar contraseña</label>
					<input id="" name="" type="text" class="form-control" placeholder="Confirmar contraseña" />
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-12">
					<button type="submit" class="btn btn-primary pull-right">Guardar cambios</button>
				</div>
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
					<h4 class="modal-title" id="myModalLabel">¿Eliminar firma?</h4>
				</div>
				<div class="modal-body">
					<p>¿Seguro que desea eliminar esta firma?</p>
					<input type="hidden" id="idFirma" name="idFirma" />
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Aceptar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>