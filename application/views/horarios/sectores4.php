<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/horario.css" />
	<?php $this->load->view('header/header_administrativo'); ?>


</head>

</head>

<body>
	<main>
		<!-- INICIO FORMULARIO -->
		<div class="right_col" role="main">
			<br><br>
			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 13: Martes, Jueves y Sabado
				</div>
				<div class="card-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th></th>
								<th>Desde</th>
								<th></th>
								<th>Hasta</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<th>1</th>
								<td>Cardenal Silva Henrique de Caupolican</td>
								<td></td>
								<td>Puente Aguas Frias</td>

							</tr>
							<tr>
								<th>2</th>
								<td>Incluye Sector Sur Nuevo Amanecer</td>
								<td></td>


							</tr>

						</tbody>
					</table>


				</div>
			</div>

			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 14: MArtes, Jueves y Sabado
				</div>
				<div class="card-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th></th>
								<th>Desde</th>
								<th></th>
								<th>Hasta</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<th>1</th>
								<td>Januario Espinoza de Rengo</td>
								<td></td>
								<td>AVDA. Esfuerzo</td>

							</tr>
							<tr>
								<th>2</th>
								<td>AVDA. Esfuerzo</td>
								<td></td>
								<td>El Almendro</td>

							</tr>

						</tbody>
					</table>


				</div>
			</div>

			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 15: MArtes, Jueves y Sabado
				</div>
				<div class="card-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th></th>
								<th>Desde</th>
								<th></th>
								<th>Hasta</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<th>1</th>
								<td>Hospital y Clinica de Dialisis</td>
								<td></td>


							</tr>
							<tr>
								<th>2</th>
								<td>Maria del Valle</td>
								<td></td>


							</tr>
							<tr>
								<th>3</th>
								<td>Camino a Panimavida de MAria del Valle</td>
								<td></td>
								<td>AVDA. Presidente Ibañez</td>

							</tr>
							<tr>
								<th>4</th>
								<td>POBL. 18 de Septiembre</td>
								<td></td>


							</tr>
							<tr>
								<th>2</th>
								<td>Calles San Jose y Guadalupe</td>
								<td></td>


							</tr>

						</tbody>
					</table>


				</div>
			</div>


			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 1-B: Nocturno Martes, Jueves y Sabado
				</div>
				<div class="card-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th></th>
								<th>Desde</th>
								<th></th>
								<th>Hasta</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<th>1</th>
								<td>Valentin Letelier Sur</td>
								<td></td>
								<td>AVDA. PResidente Ibañez</td>


							</tr>
							<tr>
								<th>2</th>
								<td>Brasil</td>
								<td></td>
								<td>Yungay</td>

							</tr>
							<tr>
								<th>3</th>
								<td>Incluye Escuela de Artilleria</td>
								<td></td>


							</tr>

						</tbody>
					</table>


				</div>
			</div>

			<div class="center">
				<ul class="pagination">
					<li><a href="<?= site_url() ?>Vistas/vistaHorario3">«</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorario1">1</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorario2">2</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorario3">3</a></li>
					<li><a class="active" >4</a></li>
					<li><a >»</a></li>
				</ul>
			</div>




	</main>

	<?php $this->load->view('footer/footer_administrativo'); ?>


</body>

</html>
