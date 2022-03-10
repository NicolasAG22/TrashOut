<!DOCTYPE html>

<html>
    <head>
        <?php $this->load->view('header/header_administrativo'); ?>
     
      
    </head>

    <body>
 
        <!-- INICIO FORMULARIO -->
        <main>
            <div class="right_col" role="main">  
         
      
                    <h4>Creacion de Camion</h4>
                    <fieldset>
                            Patente
                        <input id="matricula" onblur="validarPatente(this);" placeholder="XX-XX-XX" class="form-control" type="text" v-model="Patente"  required autofocus>
                    </fieldset>
                    <br>
                    <fieldset>
                        <div >                         
                            Estado de Camion
                            <span class="caret"></span>
                        </div> 
                        <select id="list" onchange="getSelectValue();" class="form-control" v-model="Estado_idEstado">
                            <option  v-bind:value="1">Activo</option>
                            <option  v-bind:value="0">Inactivo</option>

                        </select>
                    </fieldset>    
                    <br>                
                    <fieldset>
                        <div >                         
                            Chofer
                            <span class="caret"></span>
                        </div> 

                        <select id="list" onchange="getSelectValue();" class="form-control" v-model="Chofer_id_Chofer">
                            <option value="1">Seleccion un chofer</option>
                            <option v-for="c in chofer" v-bind:value="c.id_Chofer"> {{c.Nombre}} {{c.Apellido_Paterno}} {{c.Apellido_Materno}}</option>
                        </select>

                    </fieldset>
                    <br>
                    <fieldset>
                        <div >                         
                            Marca
                            <span class="caret"></span>
                        </div> 

                        <select id="list" onchange="getSelectValue();" class="form-control" v-model="Marca_id_Marca">
                            <option value="1">Seleccion una marca</option>
                            <option v-for="m in marcaM" v-bind:value="m.id_Marca"> {{m.Nombre_Marca}}  {{m.Modelo}} </option>
                        </select>

                    </fieldset>
                    <br>
                    <fieldset>
                        <button  type="submit" class="btn btn-default submit" @click="insertarCamion()">Crear</button>
                    </fieldset>
                   
               
                
            </div>


        </main>









        
        <?php $this->load->view('footer/footer_administrativo'); ?>
     
        <script src="<?= base_url() ?>assets/js/Vue_Camion.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/js/validaciones.js" type="text/javascript"></script>

    </body>
</html>
