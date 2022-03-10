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

	<!-- Custom Theme Style -->
	<link href="<?= base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">


	<!-- FONT -->

	<link href="<?= base_url() ?>assets/fontawesome-free-5.15.1-web/css/fontawesome.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/fontawesome-free-5.15.1-web/css/brands.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/fontawesome-free-5.15.1-web/css/solid.css" rel="stylesheet">





	<link href="<?= base_url() ?>assets/css/iconos.css" rel="stylesheet">





</head>




<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a class="site_title"><img id="imagen2"
								src="<?= base_url() ?>assets/img/icono/icono2.png"
								><span>Trash Out</span></a>
					</div>

					<div class="clearfix"></div>
					<br />
					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-users"></i> Modulo Usuario <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/Usuario"><i
													class="fa fa-user-plus"></i>Crear Usuario</a></li>
										<li><a href="<?= base_url() ?>Vistas/EditarUsuarios"><i
													class="fa fa-user-times"></i>Editar Usuario</a></li>
										<li><a href="<?= base_url() ?>Vistas/ReporteUsuario"><i
													class="fa fa-chart-line"></i>Generar Reporte</a></li>
									</ul>
								</li>

								<li><a><i class="fa fa-drivers-license"></i> Modulo Chofer <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/Chofer"><i
													class="fa fa-user-circle"></i>Crear Chofer</a></li>
										<li><a href="<?= base_url() ?>Vistas/EditarChoferes"><i
													class="fa fa-list-alt"></i>Editar Chofer</a></li>
										<li><a href="<?= base_url() ?>Vistas/ReporteChofer"><i
													class="fa fa-chart-line"></i>Generar Reporte</a></li>
									</ul>
								</li>

								<li><a><i class="fa fa-truck"></i> Modulo Camion <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/Camion"><i
													class="fa fa-tachometer"></i>Crear Camion</a></li>
										<li><a href="<?= base_url() ?>Vistas/EditarCamiones"><i
													class="fa fa-edit"></i>Editar Camion</a></li>
										<li><a href="<?= base_url() ?>Vistas/ReporteCamion"><i
													class="fa fa-chart-line"></i>Generar Reporte</a></li>

									</ul>
								</li>

								<li><a><i class="fa fa-bookmark"></i> Marcas <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/Marca"><i class="fa fa-folder"></i>Crear
												Marca</a></li>
										<li><a href="<?= base_url() ?>Vistas/EditarMarcas"><i
													class="fa fa-heading"></i>Editar Marcas</a></li>
										<li><a href="<?= base_url() ?>Vistas/ReporteMarca"><i
													class="fa fa-chart-line"></i>Generar Reporte</a>
										</li>

									</ul>
								</li>
								<li><a><i class="fa fa-road"></i> Reportes <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/vistaReporteCamion"><i class="fa fa-folder"></i>Reporte Log Camion</a></li>
										

									</ul>
								</li>
								<li><a><i class="fa fa-road"></i> Calle <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/Calle"><i class="fa fa-folder"></i>Crear
												Calle</a></li>
										<li><a href="<?= base_url() ?>Vistas/EditarCalle"><i
													class="fa fa-heading"></i>Editar Calle</a></li>
										<li><a href="<?= base_url() ?>Vistas/ReporteCalle"><i
													class="fa fa-chart-line"></i>Generar Reporte</a>
										</li>

									</ul>
								</li>

								<li><a><i class="fa fa-location-arrow"></i> Mapa <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/Mapa">Visualizar ruta</a></li>
										<li><a href="<?= base_url() ?>Vistas/Puntos">Visualizar puntos de reciclaje</a></li>
									</ul>
								</li>

							
								

								<li><a><i class="fa fa-calendar"></i> Horarios <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>Vistas/vistaHorario1">Horario</a></li>


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
								<a class="nav-link" href="<?= base_url() ?>/Welcome/salir"><i
										class="fa fa-sign-out"></i>Salir</a>
							</li>




						</ul>
						</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->
			<br>
