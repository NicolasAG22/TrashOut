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
			<h3>Mas Sobre Papel</h3>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img width="1400" height="500" src="<?= base_url() ?>assets/img/consejoimg/papel/1.jpg"
							alt="First slide">
					</div>
					<div class="carousel-item">
						<img width="1400" height="500" src="<?= base_url() ?>assets/img/consejoimg/papel/2.jpg"
							alt="Second slide">
					</div>
					<div class="carousel-item">
						<img width="1400" height="500" src="<?= base_url() ?>assets/img/consejoimg/papel/3.jpg"
							alt="Third slide">
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



			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Pasos para reciclar
				</div>
				<div class="card-body">
					<div class="row">

						<div class="item-container">
							<div id="circle1" class="circle-item ">
								<p>
									1
								</p>
							</div>
							<br>
							<div class=" bubble">
								<div class="talktext">
									<p>Saca etiquetas y tapas.</p>
								</div>

							</div>

						</div>

						<div class="item-container">
							<div id="circle1" class="circle-item">
								<p>
									2
								</p>
							</div>
							<br>
							<div class=" bubble">
								<div class="talktext">
									<p>Saca elementos como clips, corchetes, cinta adhesiva y
										espiral.</p>
								</div>

							</div>

						</div>

						<div class="item-container">
							<div id="circle1" class="circle-item">
								<p>
									3
								</p>
							</div>
							<br>
							<div class=" bubble">
								<div class="talktext">
									<p>Deposita el papel en el contenedor correspondiente.</p>
								</div>


							</div>

						</div>


						<div class="item-container">
							<div id="circle1" class="circle-item3">
								<p>
									4
								</p>
							</div>
							<br>
							<div class=" bubble3">
								<div class="talktext">
									<p>el papel kraft generalmente se puede reciclar como
										cartón. Sin embargo, se recomienda consultar a su punto limpio más cercano sobre
										su
										política para este material.
										.</p>

								</div>

							</div>
							<br>

						</div>


					</div>


				</div>
			</div>


			<br>
			<div class="card border-primary mb-3">
				<div class="card-header card-header text-white   bg-primary mb-3">Video informativo</div>
				<div class="card-body text-primary">

					<div style="text-align:center;">

						<video width="640" height="480" controls>
							<source src="<?= base_url() ?>assets/videos/papel.mp4" type="video/mp4" />

						</video>

					</div>


				</div>
			</div>

			<br>
			<div class="row">

				<div class="col s12 m12 l3" id="cf">
					<a href="<?= site_url() ?>Vistas/vistaPlastico">
						<img src="<?= base_url() ?>assets/img/plastico.jpg" />
						<img class="top" src="<?= base_url() ?>assets/img/plastico2.jpg" />
				</div>

				<div class="col s12 m12 l3" id="cf">
					<a href="<?= site_url() ?>Vistas/vistaVidrio">
						<img src="<?= base_url() ?>assets/img/vidrio2.jpg" />
						<img class="top" src="<?= base_url() ?>assets/img/vidrio.jpg" />
				</div>

				<div class="col s12 m12 l3" id="cf">
					<a href="<?= site_url() ?>Vistas/vistaCarton">
						<img class=" bottom" class="top" src="<?= base_url() ?>assets/img/carton2.jpg" />
						<img class="top" src="<?= base_url() ?>assets/img/carton.jpg" />
				</div>

				<div class=" col s12 m12 l3" id="cf">
					<a href="<?= site_url() ?>Vistas/vistaPapel">
						<img class=" bottom" src="<?= base_url() ?>assets/img/papel2.jpg" />
						<img class="top" src="<?= base_url() ?>assets/img/papel.jpg" />
				</div>



			</div>





	</main>

	<?php $this->load->view('cliente/footer_administrativo'); ?>
	<script src="<?= base_url() ?>assets/js/Vue_Usuario.js" type="text/javascript"></script>


</body>

</html>
