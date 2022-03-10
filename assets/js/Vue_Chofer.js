new Vue({
    el: 'main',
    data: {

        id_Chofer: '',
        Rut: '',
        Nombre: '',
        Apellido_Paterno: '',
        Apellido_Materno: '',
        Estado_idEstado: 0,
        chofer: [],
        choferModal: {},
        o:''



    },

    created: function() {
        this.Cargachofer();
    },

    mounted: function() {


    },

    methods: {

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

        insertarChofer: function() {
            url = "http://localhost/TrashOut2/index.php/welcome/insertar_chofer";
            param = new FormData();
            param.append("Rut", this.Rut);
            param.append("Nombre", this.Nombre);
            param.append("Apellido_Paterno", this.Apellido_Paterno);
            param.append("Apellido_Materno", this.Apellido_Materno);
            param.append("Estado_idEstado", this.Estado_idEstado);

            axios.post(url, param)
            .then(res => {
                this.o = res.data;
                alert(this.o);
                this.Rut="";
                this.Nombre="";
                this.Apellido_Paterno="";
                this.Apellido_Materno="";
                this.Cargachofer();
                
            })
            .catch(e => {
                console.log(e);
            });



        },
        cargaModal: function(c) {
            this.choferModal = c;
            var elem = document.querySelector('.modal');


        },
        eliminarChofer: function(c) {
            if (confirm("Está seguro de eliminar a " + c.Nombre + " ?")) {
                url = "http://localhost/TrashOut2/index.php/welcome/eliminar_chofer";
                param = new FormData();
                param.append("id_Chofer", c.id_Chofer);
                axios.post(url, param)
                    .then(res => {
                        o = res.data;
                        // M.toast({html:o.value});
                        this.Cargachofer();
                    })
                    .catch(e => {
                        console.log(e);
                    });
            }

        },

        actualizarChofer: function() {
            url = "http://localhost/TrashOut2/index.php/welcome/actualizar_chofer";
            param = new FormData();
            param.append("id_Chofer", this.choferModal.id_Chofer);
            param.append("Rut", this.choferModal.Rut);
            param.append("Nombre", this.choferModal.Nombre);
            param.append("Apellido_Paterno", this.choferModal.Apellido_Paterno);
            param.append("Apellido_Materno", this.choferModal.Apellido_Materno);
            param.append("Estado_idEstado", this.choferModal.Estado_idEstado);

            axios.post(url, param)
                .then(res => {
                    this.o = res.data;
                    alert(this.o);
                    this.Cargachofer();

                })
                .catch(e => {
                    console.log(e);
                });
        }











    }













});