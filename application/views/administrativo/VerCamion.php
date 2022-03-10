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
                               
                                <th scope="col">Patente</th>
                                <th scope="col">Estado de camion</th>
                                <th scope="col">Nombre Chofer</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Marca</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="c in camion">
                       
                                <td>{{c.Patente}}</td>
                                <td v-if="c.Estado_idEstado==0">
                                    Ocupado
                                </td> 
                                <td v-else>
                                    Disponible
                                </td>
                                <td>{{c.Nombre}}</td>
                                <td>{{c.Apellido_Paterno}} {{c.Apellido_Materno}}</td>
                                <td>{{c.Nombre_Marca}}</td>


                                <td>
                                    <button id="trash1" type="button" class="btn btn-default"  @click="eliminarCamion(c)">
                                        <span class="fa fa-trash"></span>
                                    </button>

                                </td>
                                <td>
                                    <button id="check1" type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"  @click="cargaModal(c)">
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
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar Camion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <input type="hidden" v-model="camionModal.id_Camion"/>
                            <h6>Patente</h6>
                            <fieldset>
                                <input id="matricula" placeholder="Patente" onblur="validarPatente(this);" type="text" class="form-control" v-model="camionModal.Patente"   autofocus>
                            </fieldset>
                            <br>
                            <fieldset>
                                <h6>Estado Chofer</h6>
                                <select id="list" onchange="getSelectValue();" class="form-control" v-model="camionModal.Estado_idEstado" style="width: 100%">
                                    <option  :value="1">Activo</option>
                                    <option  :value="0">Inactivo</option>

                                </select>
                            </fieldset>
                            <br>
                            <fieldset>

                                <h6>Chofer</h6>
                                <select id="list" onchange="getSelectValue();" class="form-control" v-model="camionModal.Chofer_id_Chofer" style="width: 100%">
                                    
                                    <option v-for="c in chofer" v-bind:value="c.id_Chofer"> {{c.Nombre}} {{c.Apellido_Paterno}} {{c.Apellido_Materno}}</option>
                                </select>
                            {{camionModal}}
                            </fieldset>
                            <br>
                            <fieldset>
                                <h6>Marca</h6>
                                <select id="list" onchange="getSelectValue();" class="form-control" v-model="camionModal.Marca_id_Marca" style="width: 100%">
                                  
                                    <option v-for="m in marcaM" v-bind:value="m.id_Marca"> {{m.Nombre_Marca}}</option>
                                </select>

                            </fieldset>


                            <br>

                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-primary" data-dismiss="modal"  @click="actualizarCamion()">Editar</button>
                        </div>
                    </div>
                </div>
            </div>






        </main>


        <?php $this->load->view('footer/footer_administrativo'); ?>


        <script src="<?= base_url() ?>assets/js/Vue_Camion.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/js/validaciones.js" type="text/javascript"></script>




    </body>
</html>
