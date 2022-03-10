<!DOCTYPE html>

<html>
    <head>
        <?php $this->load->view('header/header_administrativo'); ?>
     
      
    </head>

    <body>
 
        <!-- INICIO FORMULARIO -->
        <main>
            <div class="right_col" role="main">  
                <form id="contact" action="" method="post">
      
                    <h4>Creacion de Calle</h4>
                    <fieldset>
                            Nombre
                        <input id="nombre" placeholder="Nombre" class="form-control" type="text" v-model="Nombre"  required autofocus>
                    </fieldset>
                    <br>
                    <fieldset>
                            Latitud
                        <input id="nombre" placeholder="Latitud" class="form-control" type="text" v-model="Latitud"  required autofocus>
                    </fieldset>
                    <br>
                    <fieldset>
                            Longitud
                        <input id="nombre" placeholder="Longitud" class="form-control" type="text" v-model="Longitud"  required autofocus>
                    </fieldset>
                    <br>
                    
                    <fieldset>
                        <button  type="submit" class="btn btn-default submit" @click="insertarCalle()">Crear</button>
                    </fieldset>
                   
                </form>
                
            </div>


        </main>









        
        <?php $this->load->view('footer/footer_administrativo'); ?>
     
        <script src="<?= base_url() ?>assets/js/Vue_Calle.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/js/validaciones.js" type="text/javascript"></script>

    </body>
</html>
