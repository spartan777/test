<script type="text/javascript">
	function comprobarPassword(){ 
   	var clave1 = document.cuestionario.Password.value;
   	var clave2 = document.cuestionario.Password2.value; 

   	if (clave1 == clave2) 
      	//document.inicio_sesion.submit()
        return true;
   	else 
      	alert("Contraseñas diferentes favor de validar.");
        return false;
	}
</script>
<div class="col-md-6 col-md-offset-3 well ">
		
		<!--TITULO DE FORMULARIO-->
		<div class="row">
			<div class="col-md-12">
				<h2><p class="text-center">Registro</p></h2>
				<h5><p class="text-center">Por favor completa la información que se te solicita a continuación. <br> Es importante que generes una cuenta, para poder resolver el test.</p></h5>
			</div>
		</div>
		<br> 
		
		<div class="col-md-10 col-md-offset-1 ">
			<!--FORMULARIO-->
			<form class="form-horizontal" name="cuestionario" onSubmit="return comprobarPassword()" method="POST" action="<?php echo base_url(); ?>welcome/registro">
			
				<!-- sería cada row-->
				<div class="form-group">
					<label class="col-md-2 control-label" for="Nombre">Nombre:</label> 
					<div class="col-md-10">
						<input class="form-control" type="text" id="Nombre" name="Nombre" placeholder="Ingrese su nombre." required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label" for="Paterno">Paterno:</label> 
					<div class="col-md-10">
						<input class="form-control" type="text" id="Paterno" name="Paterno" placeholder="Ingrese apellido paterno." required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label" for="Materno">Materno:</label> 
					<div class="col-md-10">
						<input class="form-control" type="text" id="Materno" name="Materno" placeholder="Ingrese apellido materno." required>
					</div>
				</div>
				<hr style="border: 0; border-top: 1px solid #999; border-bottom: 1px solid #333; height:0;">
				<div class="form-group">
					<label class="col-md-2 control-label" for="Correo">Correo:</label> 
					<div class="col-md-10">
						<input class="form-control" type="email" id="Correo" name="Correo" placeholder="Ingrese el correo electronico." required >
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label" for="Password">Contreseña:</label> 
					<div class="col-md-10">
						<input class="form-control" type="password" id="Password" name="Password" placeholder="Ingrese su contraseña." required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label" for="Password2">Repetir Contreseña:</label> 
					<div class="col-md-10">
						<input class="form-control" type="password" id="Password2" name="Password2" placeholder="Repita su contraseña." required>
					</div>
				</div>
				<hr style="border: 0; border-top: 1px solid #999; border-bottom: 1px solid #333; height:0;">
				<div class="form-group">
				    <label class="col-md-2 control-label" for="Escuela">Escuela:</label>
				    <div class="col-md-10">
				      	<input type="text"  class="form-control" id="Escuela"  name="Escuela" placeholder="Ingresa la escuela de procedencia." required>
				    </div>
				</div><br> 
				<center><div class="form-group ">
				    <input type="submit" class="btn btn-primary" value="Guardar" ></input>
				    <a href="<?= base_url(); ?>"><input type="button" class="btn btn-danger" value="Cancelar"></a>
				</div></center>

			</form>
	</div>
</div>