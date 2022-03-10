<!DOCTYPE html>

<html>

<head>
	<?php $this->load->view('header/header_administrativo'); ?>
	<link href="<?= base_url() ?>/assets/css/login.css" rel="stylesheet" type="text/css" />

</head>

<body id="bodyusuario">
	<?php $this->load->view('administrativo/nav2'); ?>


	<main>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<form class="box">
							<h1>Login</h1>
							<p class="text-muted"> Porfavor ingrese Nombre de usuario y contraseña!</p>
							<input type="text" placeholder="Nombre de usuario" v-model="username">
							<input type="password" placeholder="Contraseña" v-model="clave">

							<input type="submit" name="" value="Login" @click="insertar()">

						</form>
					</div>
				</div>
			</div>
		</div>



	</main>

	<?php $this->load->view('footer/footer_administrativo'); ?>

	<script src="<?= base_url() ?>assets/js/Vue_login.js" type="text/javascript"></script>




</body>

</html>
