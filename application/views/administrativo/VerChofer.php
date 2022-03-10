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
						<th scope="col">Rut</th>
						<th scope="col">Nombre</th>
						<th scope="col">Apellido Paterno</th>
						<th scope="col">Apellido Materno</th>
						<th scope="col">Estado</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="c in chofer">
						<td>{{c.Rut}}</td>
						<td>{{c.Nombre}}</td>
						<td>{{c.Apellido_Paterno}}</td>
						<td>{{c.Apellido_Materno}}</td>
						<td v-if="c.Estado_idEstado==0">
							Ocupado
						</td>
						<td v-else>
							Disponible
						</td>
						<td>
							<button id="trash1" type="button" class="btn btn-default" @click="eliminarChofer(c)">
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

						<input type="hidden" v-model="choferModal.id_Chofer" />

						<fieldset>
							Rut
							<br>
							<input placeholder="Rut" type="text" class="form-control" v-model="choferModal.Rut">
						</fieldset>
						<fieldset>
							Nombre
							<br>
							<input placeholder="Tu nombre" type="text" class="form-control" v-model="choferModal.Nombre"
								autofocus>
						</fieldset>
						<fieldset>
							Apellido Paterno
							<br>
							<input placeholder="Apellido Paterno" type="text" class="form-control"
								v-model="choferModal.Apellido_Paterno">
						</fieldset>
						<fieldset>
							Apellido Materno
							<br>
							<input placeholder="Apellido Materno" type="text" class="form-control"
								v-model="choferModal.Apellido_Materno">
						</fieldset>
						<fieldset>
							<div>
								Estado
								<span class="caret"></span>
							</div>
							<select id="list" onchange="getSelectValue();" class="form-control"
								v-model="choferModal.Estado_idEstado">
								<option :value="1">Activo</option>
								<option :value="0">Inactivo</option>

							</select>


						</fieldset>

						<br>

					</div>
					<div class="modal-footer">

						<button type="button" class="btn btn-primary" data-dismiss="modal"
							@click="actualizarChofer()">Editar</button>
					</div>
				</div>
			</div>
		</div>









	</main>







	<?php $this->load->view('footer/footer_administrativo'); ?>




	<script src="<?= base_url() ?>assets/js/Vue_Chofer.js" type="text/javascript"></script>


</body>

</html>
