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
			<h3>Mas Sobre Carton</h3>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img id="img1" width="1400" height="500"
							src="<?= base_url() ?>assets/img/consejoimg/carton/1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img width="1400" height="500" src="<?= base_url() ?>assets/img/consejoimg/carton/2.jpg"
							alt="Second slide">
					</div>
					<div class="carousel-item">
						<img width="1400" height="500" src="<?= base_url() ?>assets/img/consejoimg/carton/3.jpg"
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
							<div id="circle1" class="circle-item2 ">
								<p>
									1
								</p>
							</div>
							<br>
							<div class=" bubble2">
								<div class="talktext">
									<p>Quita todos los elementos de otra materialidad,
										tales como: cintas adhesivas, corchetes metálicos, entre otros..</p>
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
									<p>Si el cartón está manchado con restos de alimentos,
										límpialo</p>
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
									<p>Reduce su volumen aplanándolo.</p>
								</div>


							</div>

						</div>


						<div class="item-container">
							<div id="circle1" class="circle-item">
								<p>
									4
								</p>
							</div>
							<br>
							<div class=" bubble">
								<div class="talktext">
									<p>Deposita el cartón en el contenedor correspondiente.</p>

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
							<source src="<?= base_url() ?>assets/videos/carton.mp4" type="video/mp4" />

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



</body>

</html>
