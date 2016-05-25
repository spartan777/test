<div class="col-md-6 col-md-offset-3 well">
		
		<!--TITULO DE FORMULARIO-->
		<div class="row">
			<div class="col-md-12">
				<h2><p class="text-center">Iniciar sesion</p></h2>
				<h5><p class="text-center">Ingrese los datos de su registro.</p></h5>
			</div>
		</div>
		<br> 
		
		<div class="col-md-14">
			<!--FORMULARIO-->
			<form class="form-horizontal" method="POST" action="<?= base_url() ?>welcome/iniciar_sesion">
				<div class="form-group">
					<label class="col-md-4 control-label" for="Correo">Correo:</label> 
					<div class="col-md-6">
						<input class="form-control" type="email" id="Correo" name="Correo" placeholder="Ingrese el correo electronico." required >
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="Password">Contreseña:</label> 
					<div class="col-md-6">
						<input class="form-control" type="password" id="Password" name="Password" placeholder="Ingrese su contraseña." required>
					</div>
				</div>
				<center><div class="form-group ">
				    <button type="submit" class="btn btn-primary">Aceptar</button>
				    <a href="<?= base_url(); ?>"><input type="button" class="btn btn-danger" value="Cancelar"></a>
				</div></center>

			</form>
	</div>
</div>