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
					Sector 5: Lunes, Miercoles y Viernes
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
								<td>AVDA. Coronel de Artilleria de Rene Sheneider</td>
								<td></td>
								<td>Nemecio Antunes</td>

							</tr>
							<tr>
								<th>2</th>
								<td>Nemecio Antunes</td>
								<td></td>
								<td>Pobl. Abate Molina</td>

							</tr>
							<tr>
								<th>3</th>
								<td>Calle Argentina de Presindente Ibañez</td>
								<td></td>
								<td>Linea Ferrea</td>

							</tr>
							<tr>
								<th>4</th>
								<td>Incluye calle Mexico, San Martin, Santa Lucinda, Marcos Lopez</td>


							</tr>

						</tbody>
					</table>


				</div>
			</div>

			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 6: Lunes, Miercoles y Viernes
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
								<td>POBL. Oscar Bonilla</td>
								<td></td>


							</tr>
							<tr>
								<th>2</th>
								<td>POBL. Camus 1,2,3,4,5</td>
								<td></td>


							</tr>
							<tr>
								<th>3</th>
								<td>POBL. Quinta la Libertad</td>


							</tr>
							<tr>
								<th>4</th>
								<td>Federico Gana</td>


							</tr>
							<tr>
								<th>5</th>
								<td>Puerta Norte</td>


							</tr>
							<tr>
								<th>6</th>
								<td>Loteo San Manuel</td>


							</tr>
							<tr>
								<th>7</th>
								<td>Parque Cordillera</td>


							</tr>
						</tbody>
					</table>


				</div>
			</div>

			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 7: Lunes, Miercoles y Viernes
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
								<td>AVDA. Presidente Ibañez de J.Espinoza</td>
								<td></td>
								<td>Jesus Obrero</td>

							</tr>
							<tr>
								<th>2</th>
								<td>Incluye TTE. Merrino, La Rinconada, san Jorge, Yerbas Buenas y Iansa</td>
								<td></td>
								<td>Yungay</td>

							</tr>

						</tbody>
					</table>


				</div>
			</div>


			<div class="card border-primary mb-3">
				<div class="card-header text-white   bg-primary mb-3">
					Sector 8: Lunes, Miercoles y Viernes
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
								<td>Hospital y Clinica de dialisis</td>
								<td></td>


							</tr>
							<tr>
								<th>2</th>
								<td>POBL. Santa Barbara</td>
								<td></td>
								<td></td>

							</tr>
							<tr>
								<th>3</th>
								<td>AVDA. Leon Bustos de Ramon Olate </td>
								<td></td>
								<td>Hoteria Malaga</td>

							</tr>
							<tr>
								<th>4</th>
								<td>Incluye Camino Real, POBL. Jerusalen, Hector Pinochet, Bello Horizonte y
									Sector Las Vegeas de AVDA. </td>
								<td></td>
								<td></td>

							</tr>
						</tbody>
					</table>


				</div>
			</div>

            <div class="center">
				<ul class="pagination">
					<li><a  href="<?= site_url() ?>Vistas/vistaHorarioCliente1">«</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorarioCliente1">1</a></li>
					<li><a class="active">2</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorarioCliente3">3</a></li>
					<li><a href="<?= site_url() ?>Vistas/vistaHorarioCliente4">4</a></li>
                    <li><a href="<?= site_url() ?>Vistas/vistaHorarioCliente3">»</a></li>
				</ul>
			</div>




	</main>


	<?php $this->load->view('cliente/footer_administrativo'); ?>



</body>

</html>
