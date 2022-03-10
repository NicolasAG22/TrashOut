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
						
						<th scope="col">Nombre Marca</th>
						<th scope="col">Modelo</th>
						<th scope="col"></th>
						<th scope="col"></th>

					</tr>
				</thead>
				<tbody>
					<tr v-for="m in marcaM">
				
						<td>{{m.Nombre_Marca}}</td>
						<td>{{m.Modelo}}</td>

						<td>
							<button id="trash1" type="button" class="btn btn-default" @click="eliminarmarca(m)">
								<span class="fa fa-trash"></span>
							</button>



						</td>
						<td>
							<button id="check1" type="button" class="btn btn-default" data-toggle="modal"
								data-target="#exampleModal" @click="cargaModal(m)">
								<span class="fa fa-pencil-square-o"></span>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		
			</br>

		</div>
			

		<!--INICIO DE MODAL -->

		<!-- Modal -->


		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Editar Marca</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<input type="hidden" v-model="marcaModal.id_Marca" />

						<fieldset>
							<input  placeholder="Tu nombre" type="text" class="form-control" v-model="marcaModal.Nombre_Marca"   autofocus>
						</fieldset>
						<br>
						<fieldset>
							<input placeholder="Email" type="email" class="form-control" v-model="marcaModal.Modelo">
						</fieldset>


						<br>

					</div>
					<div class="modal-footer">

						<button type="button" class="btn btn-primary" data-dismiss="modal"
							@click="actualizarMarca()">Editar</button>
					</div>
				</div>
			</div>
		</div>

	</main>




	<?php $this->load->view('footer/footer_administrativo'); ?>

	
	<script src="<?= base_url() ?>assets/js/Vue_Marca.js" type="text/javascript"></script>

</body>

</html>
