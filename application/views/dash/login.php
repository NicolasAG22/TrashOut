<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="icon" type="image/png" href="assets/img/icono/Imagen1.png">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Trash Out</title>

	<!-- Bootstrap -->
	<link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress-->
	<link href="<?= base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- Animate.cs -->
	<link href="<?= base_url() ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



	<!-- Custom Theme Style -->
	<link href="<?= base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/iconos.css" rel="stylesheet">
</head>

<body class="login">
	<main>
		<div>
			<a class="hiddenanchor" id="signup"></a>
			<a class="hiddenanchor" id="signin"></a>

			<div class="login_wrapper">
				<div class="animate form login_form">
					<section class="login_content">
						<form >
							<h1>Login </h1>
							<div>
								<input type="text" class="form-control" placeholder="Nombre de usuario"
									v-model="username" required autofocus />
							</div>
							<div>
								<input type="password" class="form-control" placeholder="Contraseña" v-model="clave"
									required="" />
							</div>
							<div>

								<input type="submit" class="btn btn-default submit" value="Iniciar Sesion"
									@click="insertar()">


							</div>


							<div class="clearfix"></div>
							<br />

							<div>
								<h1><img id="imagen1" src="<?= base_url() ?>assets/img/icono/Imagen1.png"> Trash Out!
								</h1>

							</div>

						</form>
					</section>
				</div>


			</div>
		</div>

	</main>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	<script src="<?= base_url() ?>assets/js/Vue_login.js" type="text/javascript"></script>

</body>

</html>
