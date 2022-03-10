<!DOCTYPE html>

<html>

<head>
	<?php $this->load->view('header/header_administrativo'); ?>
</head>

<body>

	<!-- INICIO FORMULARIO -->
	<main>
		<div class="right_col" role="main">
			<br><br>
			
				<h4>Creacion de Marca</h4>
				<fieldset>
					<input placeholder="Nombre de Marca" type="text" class="form-control" v-model="Nombre_Marca"
						required autofocus>
				</fieldset>
				<br>
				<fieldset>
					<input placeholder="Modelo" type="text" v-model="Modelo" class="form-control" required>
				</fieldset>
				<br>
				
				<fieldset>
					<button type="submit" class="btn btn-default submit" @click="insertarmarca()">Crear</button>
				</fieldset>
				<br>
		

		</div>


	</main>


	<?php $this->load->view('footer/footer_administrativo'); ?>

	<script src="<?= base_url() ?>assets/js/Vue_Marca.js" type="text/javascript"></script>
	

</body>

</html>
