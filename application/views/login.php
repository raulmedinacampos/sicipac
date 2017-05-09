
<div>
	<div class="row tituloLogin">
		<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 text-center">
			<h2><span>S</span>istema <span>I</span>nstitucional para <span>C</span>onsolidar la <span>I</span>nformación de <span>P</span>rocedimientos de <span>A</span>dquisición y <span>C</span>ontratación</h2>
		</div>
	</div>
	
	<div id="loginWrapper" class="col-md-4 col-sm-5">
		<h3>Ingreso al sistema</h3>
		<form id="formLogin" name="formLogin" method="post" action="<?php echo base_url("principal"); ?>">
			<div class="form-group">
				<label>Usuario</label>
				<div class="input-group">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>
					</div>
					<input type="text" id="username" name="username" class="form-control" placeholder="Usuario" />
				</div>
			</div>
			
			<div class="form-group">
				<label>Contraseña</label>
				<div class="input-group">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
					</div>
					<input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" />
				</div>
			</div>
			
			<p><button id="btnIngresar" name="btnIngresar" class="btn btn-primary">Ingresar</button></p>
		</form>
	</div> <!-- #loginWrapper -->
</div>