<?php  require_once "principal_header.php"?>


<div class="right_col" role="main">
	<br><br>
<main>
<!-- GRAFICOS -->
<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="dashboard_graph">

				<div class="row x_title">
					<div class="col-md-6">
						<h3>Principal administrativo </h3>
					</div>
					
				</div>
				<div class="row ">
					<div class="col-md-12">
					<div class="tile_count">
            <div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-truck"></i> Total Camiones en ruta</span>
              <div class="count">{{camiones}}</div>
              
			</div>
			<div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-id-card"></i> Total Choferes</span>
              <div class="count">{{choferes}}</div>
              
			</div>
			<div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total usuarios</span>
              <div class="count">{{usuarios}}</div>
              
			</div>
			
          	</div>
					</div>
					
				</div>
				
			</div>
		</div>
		
	</div>	
	<div class="row"  >
		<div class="col-md-12 col-sm-12 ">
			<div class="dashboard_graph">

			
				<!-- top tiles -->
				
          
        </div>
			</div>
		</div>				
			
	<br>
	<div class="row">


	

		<div class="col-md-6 col-sm-6 ">
			<div class="x_panel tile fixed_height_400 overflow_hidden">
				<div class="x_title">
					<h2>Choferes Activos</h2>
					
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div id="graficagra">
    					<canvas id="myChart" width="400" height="150"></canvas>
    				</div>
				</div>
			</div>
		</div>


		<div class="col-md-6 col-sm-6 ">
			<div class="x_panel tile fixed_height_400 overflow_hidden">
				<div class="x_title">
					<h2>Camiones Activos</h2>
					
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div id="graficagra2">
    					<canvas id="myChart2" width="400" height="150"></canvas>
    				</div>
				</div>
			</div>
		</div>

	</div>
	<!--FIN DE GRAFICOS-->
</main>



	<script crossorigin="anonymous" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>    
 
 	<!-- Chart JS -->
 	<!-- jQuery -->
 	<script src="<?= base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
	 <!-- Bootstrap -->
	 
  <script src="<?= base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
   
	

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url() ?>assets/build/js/custom.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- FONT -->
	<script src="https://use.fontawesome.com/d2876ee9f5.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="<?= base_url() ?>assets/js/Vue_Principal.js" type="text/javascript"></script>
	
 	<script type="text/javascript">
 
 	var paramFac = [];
	$.post("<?php echo base_url();?>index.php/welcome/estadoChofer",//llama al controlador y esta a su vez al modelo que contiene la consulta SQL
	function(data){
		var obj = JSON.parse(data);

		paramFac = [];
		
		$.each(obj,function(i,item){
			
			paramFac.push(item.contador);
		});

		$('#myChart').remove(); //borra la grafica (para que no se repitan los datos)
		$('#graficagra').append("<canvas id='myChart' width='400' height='300'></canvas>");  //vuelve a generar la grafica 

		var ctx = $("#myChart");
		var myChart = new Chart(ctx,{
			type: 'doughnut',
			data: {
				labels:["Activo: "+paramFac[0],"Inactivo: "+paramFac[1]],
				datasets:[{
						label: "Asignaciones",
						backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
						hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
						hoverBorderColor: "rgba(234, 236, 244, 1)",
						data: paramFac
						
					}
				]
			},
			options:{
				maintainAspectRatio: false,
				




			}
		});
	});//
	var paramFac2 = [];
	$.post("<?php echo base_url();?>index.php/welcome/estadoCamion",
		function(data2){
			var obj2 = JSON.parse(data2);
			console.log(obj2);
			$.each(obj2,function(i,item){
			
			paramFac2.push(item.contador);

		});
		$('#myChart2').remove(); //borra la grafica (para que no se repitan los datos)
		$('#graficagra2').append("<canvas id='myChart2' width='400' height='300'></canvas>");
		var ctx2 = $("#myChart2");
		var myChart2 = new Chart(ctx2,{
			type: 'doughnut',
			data: {
				labels:["Activo: "+paramFac2[0],"Inactivo: "+paramFac2[1]],
				datasets:[{
						label: "Asignaciones",
						backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
						hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
						hoverBorderColor: "rgba(234, 236, 244, 1)",
						data: paramFac2
						
					}
				]
			},
			options:{
				maintainAspectRatio: false,




			}
		});
		}
	);
	
</script>

	
