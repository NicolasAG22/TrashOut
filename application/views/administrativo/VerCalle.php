<!DOCTYPE html>

<html>

<head>
	<?php $this->load->view('header/header_administrativo'); ?>
</head>

<body>

	<!-- INICIO TABLA -->
	<main>


		<div class="right_col" role="main">
		

			<table class="table table-hover border">
				<thead>
					<tr>
						
						<th scope="col">Nombre</th>
						<th scope="col">Latitud</th>
						
						<th scope="col">Longitud</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="c in calle">
						<td>{{c.Nombre}}</td>
						<td>{{c.Latitud}}</td>
						<td>{{c.Longitud}}</td>
						
						<td>
							<button id="trash1" type="button" class="btn btn-default" @click="eliminarCalle(c)">
								<span class="fa fa-trash"></span>
							</button>

						</td>
						<td>

							<button id="check1" type="button" data-toggle="modal" data-target="#exampleModal"
								class="btn btn-default" @click="cargaModal(c)">
								<span class="fa fa-pencil-square-o"></span>
							</button>


						</td>

					</tr>
				</tbody>
			</table>
			<br>
		</div>

		<!--INICIO DE MODAL -->

		<!-- Modal -->

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Editar Chofer</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<input type="hidden" v-model="calleModal.idCalle" />
						{{calleModal}}
						
						<fieldset>
							Nombre
							<br>
							<input  type="text" class="form-control" v-model="calleModal.Nombre"
								autofocus>
						</fieldset>
						<fieldset>
							Latitud
							<br>
							<input  type="text" class="form-control"
								v-model="calleModal.Latitud">
						</fieldset>
						<fieldset>
							Longitud
							<br>
							<input  type="text" class="form-control"
								v-model="calleModal.Longitud">
						</fieldset>
					

						
					</div>
					<div class="modal-footer">

						<button type="button" class="btn btn-primary" data-dismiss="modal"
							@click="actualizarCalle()">Editar</button>
					</div>
				</div>
			</div>
		</div>









	</main>







	<?php $this->load->view('footer/footer_administrativo'); ?>




	<script src="<?= base_url() ?>assets/js/Vue_Calle.js" type="text/javascript"></script>


</body>

</html>

