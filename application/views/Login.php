<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
Vista o pagina login.php
Esta plantilla es basada en el template adminlte
En la carpeta views se cargan los php y los includes que llamen los js y los css, asi como las imagenes que contengan el proyecto
En la carpeta views no se cargan ni css, ni js ni las imagenes
Se recomienda crear una carpeta que almacene los recursos que pidan 
cada pagina o template
Esa carpeta normalmente se llama assets
y las rutas para que las pueda cargar el CI se usa una variable
propia de el que se llama base_url
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ingreso Diamante</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php  echo base_url() ?>/assets/css/Login.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="icon" href="<?=base_url()?>/assets/log.ico" type="image/ico">
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php  echo base_url() ?>assets/images/bg-01.jpg');">
			<div class="wrap-login100">
				
			   	<?php echo form_open("login/acceso");?>
					<span class="login100-form-logo">
						<img class="img-radis" src="<?php  echo base_url() ?>assets/images/manos.jpg">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Diamond
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="Email" id="Email" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="Pass" id="Pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Recuerdame
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Ingresar
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Recordar Contraseña
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>