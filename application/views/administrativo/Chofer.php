<!DOCTYPE html>

<html>

<head>
	<link href="<?= base_url() ?>/assets/css/select.css" rel="stylesheet" type="text/css" />
	<?php $this->load->view('header/header_administrativo'); ?>

</head>

<body>
	<main>
		<!-- INICIO FORMULARIO -->
		<div class="right_col" role="main">
			<br><br>

			
				<h4>Creacion de chofer</h4>
				<fieldset>
					<input id="rut" placeholder="Rut de Chofer" class="form-control"  v-model="Rut"
						 required autofocus>
				</fieldset>

				<br>
				<fieldset>
					<input placeholder="Nombre" type="text" class="form-control" v-model="Nombre" required>
				</fieldset>
				<br>
				<fieldset>
					<input placeholder="Apellido Paterno" type="text" class="form-control" v-model="Apellido_Paterno"
						required>
				</fieldset>
				<br>
				<fieldset>
					<input placeholder="Apellido Materno" type="text" class="form-control" v-model="Apellido_Materno"
						required>
				</fieldset>
				<br>
				<fieldset>
					<div>
						Estado
						<span class="caret"></span>
					</div>
					<select id="list" onchange="getSelectValue();" class="form-control" v-model="Estado_idEstado">
						<option v-bind:value="1">Activo</option>
						<option v-bind:value="0">Inactivo</option>

					</select>
				</fieldset>
				<br>
				<fieldset>

					<button type="submit" class="btn btn-default submit" @click="insertarChofer()">Crear</button>
				</fieldset>

			
	</main>

	<?php $this->load->view('footer/footer_administrativo'); ?>
	<script src="<?= base_url() ?>assets/js/Vue_Chofer.js" type="text/javascript"></script>
	


</body>

</html>
