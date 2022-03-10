new Vue({
    el: 'main',
    data: {
        id_Camion: '',
        Patente: '',
        Estado_idEstado: 0,
        Chofer_id_Chofer: 1,
        Marca_id_Marca: 1,
        chofer: [],
        marcaM: [],
        camion: [],
        camionModal: {},
        o:''




    },

    created: function() {
        this.cargarCamion();
        this.cargarMarca();
        this.Cargachofer();
    },

    mounted: function() {


    },

    methods: {

        cargarCamion: function() {
            url = "http://localhost/TrashOut2/index.php/welcome/TablaCamion";
            axios.post(url)
                .then(res => {
                    this.camion = res.data;
                })
                .catch(e => {
                    console.log(e);
                });


        },
        cargarMarca: function() {
            url = "http://localhost/TrashOut2/index.php/welcome/marca";
            axios.post(url)
                .then(res => {
                    this.marcaM = res.data;
                })
                .catch(e => {
                    console.log(e);
                });


        },
        Cargachofer: function() {
            url = "http://localhost/TrashOut2/index.php/welcome/choferes";
            axios.post(url)
                .then(res => {
                    this.chofer = res.data;
                })
                .catch(e => {
                    console.log(e);
                });


        },
        cargaModal: function(c) {
            this.camionModal = c;
            var elem = document.querySelector('.modal');


        },

        insertarCamion: function() {
            url = "http://localhost/TrashOut2/index.php/welcome/insertar_Camion";
            param = new FormData();
            param.append("Patente", this.Patente);
            param.append("Estado_idEstado", this.Estado_idEstado);
            param.append("Chofer_id_Chofer", this.Chofer_id_Chofer);
            param.append("Marca_id_Marca", this.Marca_id_Marca);

            axios.post(url, param)
                .then(res => {
                    this.o = res.data;
                    alert(this.o);
                    this.Patente="";
                    this.cargarCamion();
                })
                .catch(e => {
                    console.log(e);
                });




        },

        eliminarCamion: function(c) {
            if (confirm("Esta seguro de eliminar a " + c.Patente + " ?")) {
                url = "http://localhost/TrashOut2/index.php/welcome/eliminar_Camion";
                param = new FormData();
                param.append("id_Camion", c.id_Camion);

                axios.post(url, param)
                    .then(res => {
                        o = res.data;
                        // M.toast({html: o.value});

                        this.cargarCamion();
                    })
                    .catch(e => {
                        console.log(e);
                    });


            }


        },

        actualizarCamion: function() {
            url = "http://localhost/TrashOut2/index.php/welcome/actualizar_Camion";
            param = new FormData();
            param.append("id_Camion", this.camionModal.id_Camion);
            param.append("Patente", this.camionModal.Patente);
            param.append("Estado_idEstado", this.camionModal.Estado_idEstado);
            param.append("Chofer_id_Chofer", this.camionModal.Chofer_id_Chofer);
            param.append("Marca_id_Marca", this.camionModal.Marca_id_Marca);


            axios.post(url, param)
                .then(res => {
                    this.o = res.data;
                    alert(this.o);
                    this.cargarCamion();


                })
                .catch(e => {
                    console.log(e);
                });

        }






    }






});