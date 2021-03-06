<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Diamante Constructora</title>
<link rel="stylesheet" href="">
		<link rel="stylesheet" href="<?php  echo base_url() ?>/assets/css/main.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="icon" href="<?=base_url()?>/assets/log.ico" type="image/ico">
	</head>
	<body>
		<div class="container-menu row cp">
			<div class="logo col-sm-4">
				<img src="<?php  echo base_url() ?>/assets/Logo_white-09.png" alt="">
			</div>
			<div class="container-item offset-sm-1 col-sm-7 row">
				<div class="item col-2" id="inicio">
					<a href="#inicio">Inicio</a>
				</div>
				<div class="item col-2">
					<a href="#proyectos">Proyectos</a>
				</div>
				<div class="item col-2">
					<a href="#empresa">Nosotros</a>
				</div>
				<div class="item col-2">
					<span>Pagos</span>
				</div>
				<div class="item col-2">
					<span><a href="<?php echo site_url()?>/Login">Empleados</a></span>
				</div>
			</div>
		</div>
<div class="container-slider">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img class="d-block w-100" src="<?php  echo base_url() ?>/assets/slider_new-02.jpg" alt="First slide">
	</div>
	<div class="carousel-item">
		<img class="d-block w-100" src="<?php  echo base_url() ?>/assets/slider_new-04.jpg" alt="Second slide">
	</div>
	<div class="carousel-item">
		<img class="d-block w-100" src="<?php  echo base_url() ?>/assets/slider_new-05.jpg" alt="Third slide">
	</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
</a>
</div>
</div>


<div class="title-section" id="proyectos">
	Nuestros Proyectos
</div>

<div class="item-proyectos row col-sm-12 row justify-content-sm-center">
<div class="item-p col-sm-3">
			<div class="imagen-p">
				<img src="<?php  echo base_url() ?>/assets/property_1.jpg" alt="">
			</div>
			<div class="name-proyect">
					Edificio Lorena
			</div>
			<div class="name-city">
				Medellín, Antioquia
			</div>
			<div class="valor">
				Entregado
			</div>
			<div class="carateristicas row justify-content-sm-center">
				<div class="room">
					<i class="fas fa-bed"></i>
					3 Habitaciones &nbsp; &nbsp;
				</div>

				<div class="bathroom">
					<i class="fas fa-bath"></i>
					2 Baños
				</div>
			</div>
</div>
<div class="item-p col-sm-3">
			<div class="imagen-p">
				<img src="<?php  echo base_url() ?>/assets/property_3.jpg" alt="">
			</div>
			<div class="name-proyect">
					Diamante I
			</div>
			<div class="name-city">
				Amagá, Antioquia
			</div>
			<div class="valor">
				$ 84.900.000
			</div>
			<div class="carateristicas row justify-content-sm-center">
				<div class="area">
					<i class="fas fa-drafting-compass"></i>
					72 M2 &nbsp;
				</div>
				<div class="room">
					<i class="fas fa-bed"></i>
					3 Habitaciones  &nbsp;
				</div>
				<div class="bathroom">
					<i class="fas fa-bath"></i>
					2 Baños
				</div>
			</div>
</div>
<div class="item-p col-sm-3">
			<div class="imagen-p">
				<img src="<?php  echo base_url() ?>/assets/property_2.jpg" alt="">
			</div>
			<div class="name-proyect">
				 Altos de Villa Real
			</div>
			<div class="name-city">
				Medellín, Antioquia
			</div>
			<div class="valor">
				En Planeación
			</div>
			<div class="carateristicas row justify-content-sm-center">
				<div class="area">
					<i class="fas fa-drafting-compass"></i>
					Desde 52 M2  &nbsp;
				</div>

			</div>
</div>
</div>




<div class="title-section" id="empresa">
	Nuestra Empresa
</div>
<div class="container-nosotros row col-sm-12 row justify-content-sm-center">
<div class="col-sm-3">
	<div class="img-icon">
		<img src="<?php  echo base_url() ?>/assets/nos1.jpg" alt="">
	</div>
	<div class="subtitle">
		Quienes Somos
	</div>
	<div class="text">
		Somos una empresa constructora y promotora de proyectos inmobiliarios.
	</div>
</div>
<div class="col-sm-3">
	<div class="img-icon">
		<img src="<?php  echo base_url() ?>/assets/nos2.jpg" alt="">
	</div>
	<div class="subtitle">
		Enfoque
	</div>
	<div class="text">
		Nuestros diseños estan enfocados en la familia, queremos que al abrir la puerta de su casa no quieras volver a salir.
	</div>
</div>
<div class="col-sm-3">
	<div class="img-icon">
		<img src="<?php  echo base_url() ?>/assets/nos3.jpg" alt="">
	</div>
	<div class="subtitle">
		Vision
	</div>
	<div class="text">
	Ser la constructora preferida por los antioqueños en el 2024, gracias a nuestros proyectos.
	</div>
</div>
</div>



<div class="footer row">
<div class="info col-sm-6">
	<div class="title">
	Contactanos
	</div>
	<div class="address row">
		<div class="icon">

		</div>
		<div class="name">
				Diagonal 57 N 34-33 Bello
		</div>
	</div>
	<div class="email row">
		<div class="icon">

		</div>
		<div class="name">
				Email info@grupodiamante.com.co
		</div>
	</div>
	<div class="tel row">
		<div class="icon">

		</div>
		<div class="name">
			<div class="">
					Pbx 366 92 28
			</div>
			<div class="">
					Cel 301 609 86 45
			</div>
		</div>
	</div>
</div>
<div class="Logofooter col-sm-6">
<img src="<?php  echo base_url() ?>/assets/Logo_white-09.png" alt="" style="width:100%">
</div>
<div class="col-sm-12 text-center" style="padding-top: 40px;">
	Desarrollado por Rabbit.com.co
	<br>
	2018
</div>
</div>

		<!-- Optional JavaScript -->
		    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>
