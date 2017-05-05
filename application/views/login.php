
<div id="loginWrapper" class="col-md-4 col-sm-5">
	<h3>Ingreso al sistema</h3>
	<form id="formLogin" name="formLogin" method="post" action="<?php echo base_url("principal"); ?>">
		<div class="form-group">
			<label>Número de empleado</label>
			<div class="input-group">
				<div class="input-group-addon">
					<span class="glyphicon glyphicon-user"></span>
				</div>
				<input type="text" id="username" name="username" class="form-control" placeholder="Ingresa número de empleado" />
			</div>
		</div>
		
		<div class="form-group">
			<label>RFC con homoclave (todo en mayúsculas)</label>
			<div class="input-group">
				<div class="input-group-addon">
					<span class="glyphicon glyphicon-lock"></span>
				</div>
				<input type="password" id="password" name="password" class="form-control" placeholder="Ingresar RFC" />
			</div>
		</div>
		
		<p><button id="btnIngresar" name="btnIngresar" class="btn btn-primary">Ingresar</button></p>
	</form>
</div> <!-- #loginWrapper -->