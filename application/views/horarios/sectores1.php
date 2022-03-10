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
					Sector 1: Nocturno Lunes, Miercoles y Viernes
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
								<td>Max Jara</td>
								<td></td>
								<td>Rengo</td>

							</tr>
							<tr>
								<th>2</th>
								<td>Brasil</td>
								<td></td>
								<td>Yungay</td>

							</tr>
							<tr>
								<th>3</th>
								<td class="center">Incluye centro penitenciario</td>


							</tr>
						</tbody>
					</table>


				</div>
			</div>

			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 2: Lunes, Miercoles y Viernes
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
								<td>Las Cuellar</td>
								<td></td>
								<td>Brasil</td>

							</tr>
							<tr>
								<th>2</th>
								<td>Rengo</td>
								<td></td>
								<td>Pobl. Achibueno</td>

							</tr>

						</tbody>
					</table>


				</div>
			</div>

			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 3: Lunes, Miercoles y Viernes
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
								<td>Chacahuin</td>
								<td></td>
								<td>Pobl. Presidente Ibañes</td>

							</tr>
							<tr>
								<th>2</th>
								<td>Ramon Olate desde Leon Bustos</td>
								<td></td>
								<td>Avenida Presindente Ibañez</td>

							</tr>
							<tr>
								<th>3</th>
								<td class="center">Incluye centro penitenciario</td>


							</tr>
						</tbody>
					</table>


				</div>
			</div>

			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 4: Lunes, Miercoles y Viernes
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
								<td>Chorrillos desde AVDA. Leon Bustos</td>
								<td></td>
								<td>AVDA. Presidente Ibañes</td>

							</tr>
							<tr>
								<th>2</th>
								<td>AVDA. Presidente Ibañez de San Martin</td>
								<td></td>
								<td>Ramon Olate</td>

							</tr>
							<tr>
								<th>3</th>
								<td>Incluye Coronel de Artilleria, Frontera del Inca, Doña Florencia,
									Entre Rios y Calle Bandera</td>


							</tr>
						</tbody>
					</table>


				</div>
			</div>

			<div class="center">
				<ul class="pagination">
					<li><a>«</a></li>
					<li><a class="active">1</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorario2">2</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorario3">3</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorario4">4</a></li>
                    <li><a href="<?= site_url() ?>Vistas/vistaHorario2">»</a></li>
				</ul>
			</div>


	</main>

	<?php $this->load->view('footer/footer_administrativo'); ?>

</body>

</html>
