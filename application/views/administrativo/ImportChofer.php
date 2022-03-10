<!DOCTYPE html>

<html>

<head>


	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/jquery.dataTables.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




	<?php $this->load->view('header/Import'); ?>



</head>

<body>
	<br><br><br><br>
	<!-- INICIO TABLA -->
	<main>

		<div class="right_col" role="main">
			<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
					
						<th>Rut</th>
						<th>Nombre</th>
						<th>Apellido Paterno</th>
						<th>Apellido Materno</th>
						<th>Estado</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="c in chofer">
					
						<td>{{c.Rut}}</td>
						<td>{{c.Nombre}}</td>
						<td>{{c.Apellido_Paterno}}</td>
						<td>{{c.Apellido_Materno}}</td>
						<td v-if="c.Estado_idEstado==0">
							Inactivo
						</td>
						<td v-else>
							Activo
						</td>

					</tr>
				</tbody>

			</table>
			<br>
		</div>


	</main>



	<?php $this->load->view('footer/ImportF'); ?>
	<script src="<?= base_url() ?>assets/js/Vue_Chofer.js" type="text/javascript"></script>


	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
	</script>



	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>




	<script type="text/javascript" src="<?= base_url() ?>assets/js/jszip.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/pdfmake.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/vfs_fonts.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/buttons.print.min.js"></script>

	<script src="<?= base_url() ?>assets/assets/js/jquery.com.js" type="text/javascript"></script>




	<script type="text/javascript" src="<?= base_url() ?>assets/js/tablaestilo.js"></script>






</body>

</html>
