new Vue({
    el: 'main',
    data: {
        idCalle: '',
        Nombre: '',
        Latitud: '',
        Longitud: '',
        
        calle: [],
        calleModal: {},
        o:''




    },

    created: function () {
        this.cargarCalle();

    },

    mounted: function () {


    },

    methods: {

        cargarCalle: function () {
            url = "http://localhost/TrashOut2/index.php/welcome/calles";
            axios.post(url)
                .then(res => {
                    this.calle = res.data;
                })
                .catch(e => {
                    console.log(e);
                });


        },
        cargaModal: function (c) {
            this.calleModal = c;
            var elem = document.querySelector('.modal');


        },

        insertarCalle: function () {
            url = "http://localhost/TrashOut2/index.php/welcome/insertar_calle";
            param = new FormData();
            param.append("Nombre", this.Nombre);
            param.append("Latitud", this.Latitud);
            param.append("Longitud", this.Longitud);


            axios.post(url, param)
                .then(res => {
                    this.o = res.data.value;
                    alert(this.o);
                    this.cargarCalle();
                    console.log(res.data.value);
                })
                .catch(e => {
                    console.log(e);
                });




        },

        

        actualizarCalle: function () {
            url = "http://localhost/TrashOut2/index.php/welcome/actualizar_calle";
            param = new FormData();
            

            param.append("idCalle", this.calleModal.idCalle);
            param.append("Nombre", this.calleModal.Nombre);
            param.append("Latitud", this.calleModal.Latitud);
            param.append("Longitud", this.calleModal.Longitud);
            


            axios.post(url, param)
                .then(res => {
                  

                    this.o = res.data;
                    alert(this.o);
                    // M.toast({html: o.value});
                    this.cargarCalle();


                })
                .catch(e => {
                    console.log(e);
                });

        },
        eliminarCalle: function(c) {
            if (confirm("Esta seguro de eliminar a " + c.Nombre + " ?")) {
                url = "http://localhost/TrashOut2/index.php/welcome/eliminar_calle";
                param = new FormData();
                param.append("idCalle", c.idCalle);

                axios.post(url, param)
                    .then(res => {
                        o = res.data;
                        // M.toast({html: o.value});
                        console.log();
                        this.cargarCalle();
                    })
                    .catch(e => {
                        console.log(e);
                    });


            }


        }






    }






});