<!DOCTYPE html>

<html>

<head>

	<?php $this->load->view('header/header_administrativo'); ?>


</head>

</head>

<body>
	<main>
		<!-- INICIO FORMULARIO -->
		<div class="right_col" role="main">
			<br><br>

			
				<h4>Creacion de usuario</h4>
				<fieldset>
					<input placeholder="Tu nombre" class="form-control" type="text" v-model="Nombre"
						onkeypress="return soloLetras(event)" required autofocus>
				</fieldset>
				<br>
				<fieldset>
					<input placeholder="Email" class="form-control" type="email" v-model="Email" required>
				</fieldset>
				<br>
				<fieldset>
					<input placeholder="Apellido Paterno" class="form-control" type="text" v-model="Apellido_Paterno"
						onkeypress="return soloLetras(event)" required>
				</fieldset>
				<br>
				<fieldset>
					<input placeholder="Apellido Materno" class="form-control" type="text" v-model="Apellido_Materno"
						onkeypress="return soloLetras(event)" required>
				</fieldset>
				<br>
				<fieldset>
					<input placeholder="Nombre de usuario" type="text" class="form-control" v-model="username" required>
				</fieldset>
				<br>
				<fieldset>
					<input placeholder="Fecha" class="form-control" v-model="Fecha_Nacimiento" required>
				</fieldset>
				<br>
				<fieldset>
					<input placeholder="Contraseña" type="password" class="form-control" v-model="clave" required>
				</fieldset>
				<br>
				<fieldset>
					<input placeholder="Direccion" type="text" class="form-control" v-model="Direccion" required>
				</fieldset>
				<br>
				<fieldset>
					<div>
						Estado
						<span class="caret"></span>
					</div>
					<select id="list1" onchange="getSelectValue();" class="form-control" v-model="Estado_Usuario">
						<option v-bind:value="1">Activo</option>
						<option v-bind:value="0">Inactivo</option>
					</select>

					<div>
						Es Administrador?
						<span class="caret"></span>
					</div>
					<select id="list2" onchange="getSelectValue();" class="form-control" v-model="is_admin">
						<option v-bind:value="1">Administrador</option>
						<option v-bind:value="0">No es administrador</option>
					</select>
					<div>
						Activo
						<span class="caret"></span>

					</div>
					<select id="list3" onchange="getSelectValue();" class="form-control" v-model="is_active">
						<option v-bind:value="1">Activo</option>
						<option v-bind:value="0">Inactivo</option>
					</select>


				</fieldset>
				<br>
				<fieldset>
					<button type="submit" class="btn btn-default" @click="insertarUsuario()">Crear</button>

				</fieldset>


		
	</main>

	<?php $this->load->view('footer/footer_administrativo'); ?>
	<script src="<?= base_url() ?>assets/js/Vue_Usuario.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>assets/js/validaciones.js" type="text/javascript"></script>

</body>

</html>
