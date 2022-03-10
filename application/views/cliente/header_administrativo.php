<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" type="image/png" href="../assets/img/icono/Imagen1.png">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Trash Out </title>

	<link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?= base_url() ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

	<!-- bootstrap-progressbar -->
	<link href="<?= base_url() ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
		rel="stylesheet">

	<!-- JQVMap -->
	<link href="<?= base_url() ?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
	<!-- bootstrap-daterangepicker -->
	<link href="<?= base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?= base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">


	<!-- FONT -->

	<link href="<?= base_url() ?>assets/fontawesome-free-5.15.1-web/css/fontawesome.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/fontawesome-free-5.15.1-web/css/brands.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/fontawesome-free-5.15.1-web/css/solid.css" rel="stylesheet">



	<!-- IMPORTACIONES DE MODULOS -->
	<link href="<?= base_url() ?>/assets/css/select.css" rel="stylesheet" type="text/css" />

	<link href="<?= base_url() ?>assets/css/iconos.css" rel="stylesheet">





</head>




<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a class="site_title"><img id="imagen2"
								src="<?= base_url() ?>assets/img/icono/icono2.png"><span>Trash Out</span></a>
					</div>

					<div class="clearfix"></div>
					<br />
					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">



								<li><a><i class="fa fa-location-arrow"></i> Mapa <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/Mapa">Visualizar ruta</a></li>

									</ul>
								</li>

								<li><a><i class="fa fa-lightbulb-o"></i> Puntos <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/Puntos">Visualizar puntos de reciclaje</a>
										</li>


									</ul>
								</li>

								<li><a><i class="fa fa-calendar"></i> Horarios <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/vistaHorarioCliente1">Horario</a></li>


									</ul>
								</li>

								<li><a><i class="fa fa-lightbulb-o"></i> Consejos <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/vistaConsejo">Consejos</a></li>


									</ul>
								</li>

							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->


				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url() ?>Vistas/Login"><i style="margin-right :5px" 
										class="fa fa-sign-in"></i>Logear</a>
							</li>




						</ul>
						</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->
			<br>
