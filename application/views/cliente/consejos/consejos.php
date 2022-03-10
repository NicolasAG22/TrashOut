<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/consejos.css" />
	<?php $this->load->view('cliente/header_administrativo'); ?>


</head>

</head>

<body>
	<main>
		<!-- INICIO FORMULARIO -->
		<div class="right_col" role="main">
			<br><br>
			<h3>Consejos</h3>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img  width="1300" height="500" src="<?= base_url() ?>assets/img/principal/1" alt="First slide">
					</div>
					<div class="carousel-item">
						<img  width="1300" height="500"   src="<?= base_url() ?>assets/img/principal/2" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img   width="1300" height="500"  src="<?= base_url() ?>assets/img/principal/3" alt="Third slide">
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
			<br>
			<div class="row">

				<div class="col s12 m12 l3" id="cf">
					<a href="<?= site_url() ?>Vistas/vistaPlastico">
						<img  src="<?= base_url() ?>assets/img/plastico.jpg" />
						<img class="top" src="<?= base_url() ?>assets/img/plastico2.jpg" />
				</div>

				<div class="col s12 m12 l3"  id="cf">
					<a href="<?= site_url() ?>Vistas/vistaVidrio">
						<img src="<?= base_url() ?>assets/img/vidrio2.jpg" />
						<img class="top" src="<?= base_url() ?>assets/img/vidrio.jpg" />
				</div>

				<div class="col s12 m12 l3"  id="cf">
					<a href="<?= site_url() ?>Vistas/vistaCarton">
						<img class=" bottom" class="top" src="<?= base_url() ?>assets/img/carton2.jpg" />
						<img class="top" src="<?= base_url() ?>assets/img/carton.jpg" />
				</div>

				<div class=" col s12 m12 l3"  id="cf">
					<a href="<?= site_url() ?>Vistas/vistaPapel">
						<img class=" bottom"  src="<?= base_url() ?>assets/img/papel2.jpg" />
						<img class="top" src="<?= base_url() ?>assets/img/papel.jpg" />
				</div>



			</div>


	</main>

	<?php $this->load->view('cliente/footer_administrativo'); ?>
	<script src="<?= base_url() ?>assets/js/Vue_Usuario.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>assets/js/validaciones.js" type="text/javascript"></script>

</body>

</html>
