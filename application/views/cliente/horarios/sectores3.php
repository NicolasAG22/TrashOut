<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/horario.css" />
<?php $this->load->view('cliente/header_administrativo'); ?>


</head>

</head>

<body>
	<main>
		<!-- INICIO FORMULARIO -->
		<div class="right_col" role="main">
			<br><br>
			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 9: Marte, Jueves y Sabado
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
								<td>Arturo Pratt de Maipu</td>
								<td></td>
								<td>Camino a Panimavida (Frente a Maria del Valle)</td>

							</tr>
							<tr>
								<th>2</th>
								<td>Incluye POBL. Emilio Gidi, El Nevado, POBL. Alejandro Gidi, Camino detras
									de Cementerio Parroquial hasta Camino a Panimavida</td>
								<td></td>


							</tr>
						</tbody>
					</table>


				</div>
			</div>

			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 10: Marte, Jueves y Sabado
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
								<td>Calle Maipu de Baquedano</td>
								<td></td>
								<td>Januario Espinoza</td>


							</tr>
							<tr>
								<th>2</th>
								<td>Calle Maipu</td>
								<td></td>
								<td>Presidente Ibañez</td>

							</tr>
							<tr>
								<th>3</th>
								<td>Januario Espinoza</td>
								<td></td>
								<td>Arturo Pratt</td>
							</tr>

						</tbody>
					</table>


				</div>
			</div>

			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 11: Martes, Jueves y Sabado
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
								<td>Januario Espinoza de V. Letelier</td>
								<td></td>
								<td>Rengo</td>

							</tr>
							<tr>
								<th>2</th>
								<td>Januario Espinoza de V. Letelier a Rengo</td>
								<td></td>
								<td>POBL. Los Andes</td>

							</tr>

						</tbody>
					</table>


				</div>
			</div>


			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 12: Martes, Jueves y Sabado
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
								<td>Cardenal Silva Henrique de AVDA. Esfuerzo</td>
								<td></td>
								<td>Caupolican</td>

							</tr>
							<tr>
								<th>2</th>
								<td>Cardenal Silva Henrique de AVDA. Esfuerzo</td>
								<td></td>
								<td>El Bosque</td>

							</tr>

						</tbody>
					</table>


				</div>
			</div>


			<div class="center">
				<ul class="pagination">
					<li><a href="<?= site_url() ?>Vistas/vistaHorarioCliente2">«</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorarioCliente1">1</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorarioCliente2">2</a></li>
					<li><a class="active" >3</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorarioCliente4">4</a></li>
                    <li><a href="<?= site_url() ?>Vistas/vistaHorarioCliente4">»</a></li>
				</ul>
			</div>





	</main>


	<?php $this->load->view('cliente/footer_administrativo'); ?>



</body>

</html>
