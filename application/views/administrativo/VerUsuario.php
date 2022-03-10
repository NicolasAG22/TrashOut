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
						<th scope="col">Email</th>
						<th scope="col">Apellido Paterno</th>
						<th scope="col">Apellido Materno</th>
						<th scope="col">Fecha de Nacimiento</th>
						<th scope="col">N. Usuario</th>
						<th scope="col">Direccion</th>
						<th scope="col">Estado</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="u in usuarios">
				
						<td>{{u.Nombre}}</td>
						<td>{{u.Email}}</td>
						<td>{{u.Apellido_Paterno}}</td>
						<td>{{u.Apellido_Materno}}</td>
						<td>{{u.Fecha_Nacimiento}}</td>
						<td>{{u.username}}</td>
						<td>{{u.Direccion}}</td>
						<td v-if="u.Estado_Usuario==0">
							Inactivo
						</td>
						<td v-else>
							Activo
						</td>
						<td>
							<button id="trash1" type="button" class="btn btn-default" @click="eliminarUsuario(u)">
								<span class="fa fa-trash"></span>
							</button>
						</td>
						<td>
							<button id="check1" type="button" class="btn btn-default" data-toggle="modal"
								data-target="#exampleModal" @click="cargaModal(u)">
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
						<h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<input type="hidden" v-model="usuarioModal.id_Usuario" />

						<fieldset>
							<input placeholder="Tu nombre" type="text" class="form-control" v-model="usuarioModal.Nombre" autofocus>
						</fieldset>
						<fieldset>
							<input placeholder="Email" type="email" class="form-control" v-model="usuarioModal.Email">
						</fieldset>
						<fieldset>
							<input placeholder="Apellido Paterno" type="text" class="form-control" v-model="usuarioModal.Apellido_Paterno">
						</fieldset>
						<fieldset>
							<input placeholder="Apellido Materno" type="text" class="form-control" v-model="usuarioModal.Apellido_Materno">
						</fieldset>
						<fieldset>
							<input placeholder="Nombre de Usuario" type="text" class="form-control" v-model="usuarioModal.username">
						</fieldset>
						<fieldset>
							<input placeholder="Fecha de Nacimiento" type="text" class="form-control" v-model="usuarioModal.Fecha_Nacimiento">
						</fieldset>
						
						<fieldset>
							<input placeholder="Contraseña" type="text" class="form-control" v-model="usuarioModal.clave">
						</fieldset>
						<fieldset>
							<input placeholder="Direccion" type="text" class="form-control" v-model="usuarioModal.Direccion">
						</fieldset>
						<fieldset>
							<div>
								Estado
								<span class="caret"></span>
							</div>
							<select id="list" onchange="getSelectValue();" class="form-control" v-model="usuarioModal.Estado_Usuario">
								<option :value="1">Activo</option>
								<option :value="0">Inactivo</option>

							</select>


						</fieldset>
						<fieldset>
							<div>
								Admin
								<span class="caret"></span>
							</div>
							<select id="list" onchange="getSelectValue();" class="form-control" v-model="usuarioModal.is_admin">
								<option :value="1">Administrador</option>
								<option :value="0">Usuario</option>

							</select>


						</fieldset>
						<fieldset>
							<div>
								Active
								<span class="caret"></span>
							</div>
							<select id="list" onchange="getSelectValue();" class="form-control" v-model="usuarioModal.is_active">
								<option :value="1">Activo</option>
								<option :value="0">Inactivo</option>

							</select>


						</fieldset>

						<br>

					</div>
					<div class="modal-footer">

						<button type="button" class="btn btn-primary" data-dismiss="modal"
							@click="actualizarUsuario()">Editar</button>
					</div>
				</div>
			</div>
		</div>







	</main>







	<?php $this->load->view('footer/footer_administrativo'); ?>

	<script src="<?= base_url() ?>assets/js/Vue_Usuario.js" type="text/javascript"></script>

</body>

</html>
