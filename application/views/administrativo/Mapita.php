<!DOCTYPE html>
<html>
  <head>
    <title>TrashOut</title>
   
	<?php $this->load->view('cliente/header_administrativo'); ?>
    <style type="text/css">
     #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }

    </style>
    
  </head>
  <body onload="getData()">
  <main>
		<!-- INICIO FORMULARIO -->
		<div class="right_col" role="main">
		<div class="container" id="selected">
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Seleccione la calle mas cercana a su hogar</h5>
    
    <select class="form-control" id="Select">
      <option disabled style="background-color: grey;">Elige una calle</option>
    </select>
  </div>  

    <br>
    <a href="#" class="btn btn-primary" id="submit">Quiero la ruta</a>
    <br>
    <div id="map" ></div>
    <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alerta</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Para una correcta funcionalidad del programa prefiera realizarla en su smartphone</p>
                
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
  </div>
  <br>
</div>
  </div>
	</main>

  
  
    
    <br>
    
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVn2D72ZMlNIjsQH_TBGwPldfEUSHyW8w&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <?php $this->load->view('cliente/footer_administrativo'); ?>
    <script type="text/javascript">

$(document).ready(function(){
        $("#myModal").modal('show');
    });

    </script>
    <script src="<?= base_url() ?>assets/js/mapa2.js" type="text/javascript"></script>
    <script>
      
    </script>
  </body>
</html>

