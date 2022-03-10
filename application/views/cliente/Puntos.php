<!DOCTYPE html>

<html>
    <head>
    <?php $this->load->view('cliente/header_administrativo'); ?>
    <style type="text/css">
     #puntos {
        height: 800px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }

    </style>
      
    </head>

    <body>
 
        <!-- INICIO FORMULARIO -->
        <main>
            <div class="right_col" role="main">  
                
                    <h4>Puntos de reciclaje</h4>
                    
                    
                        <iframe id="puntos" src="https://www.google.com/maps/d/embed?mid=1wdmlJcouMvZA-RHppcx-_bt70g_lmxpW" width="800" height="600"></iframe>
                            
                   
            </div>

        
        </main>









        
        <?php $this->load->view('cliente/footer_administrativo'); ?>
     
        <script src="<?= base_url() ?>assets/js/Vue_Camion.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/js/validaciones.js" type="text/javascript"></script>

    </body>
</html>
