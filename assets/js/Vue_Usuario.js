new Vue({
    el: 'main',
    data: {

        id_Usuario: '',
        Nombre: '',
        Email: '',
        Apellido_Paterno: '',
        Apellido_Materno: '',
        username: '',
        Fecha_Nacimiento: '',
        clave: '',
        Direccion: '',
        Estado_Usuario: 0,
        is_admin:0,
        is_active:0,
        usuarios: [],
        usuarioModal: {},
        o:''

    },

    created: function() {
        this.cargarUsuarios();
    },

    mounted: function() {


    },

    methods: {

        cargarUsuarios: function() {
            url = "http://localhost/TrashOut2/index.php/welcome/usuarios";
            axios.post(url)
                .then(res => {
                    this.usuarios = res.data;
                })
                .catch(e => {
                    console.log(e);
                });


        },

        cargaModal: function(u) {
            this.usuarioModal = u;
            var elem = document.querySelector('.modal');




        },

        insertarUsuario: function() {
            url = "http://localhost/TrashOut2/index.php/welcome/insertar_usuario";
            param = new FormData();
            param.append("Nombre", this.Nombre);
            param.append("Email", this.Email);
            param.append("Apellido_Paterno", this.Apellido_Paterno);
            param.append("Apellido_Materno", this.Apellido_Materno);
            param.append("username", this.username);
            param.append("Fecha_Nacimiento", this.Fecha_Nacimiento);
            param.append("clave", this.clave);
            param.append("Direccion", this.Direccion);
            param.append("Estado_Usuario", this.Estado_Usuario);
            param.append("is_admin",this.is_admin);
            param.append("is_active",this.is_active);

            axios.post(url, param)
                .then(res => {
                    this.o = res.data;
                    alert(this.o);
                    this.Nombre="";
                    this.Email="";
                    this.Apellido_Paterno="";
                    this.Apellido_Materno="";
                    this.username="";
                    this.Fecha_Nacimiento="";
                    this.clave="";
                    this.Direccion="";
                    this.cargarUsuarios();
                   
                })
                .catch(e => {
                    console.log(e);
                });



        },
        eliminarUsuario: function(u) {
            if (confirm("Esta seguro de eliminar a " + u.Nombre + " ?")) {
                url = "http://localhost/TrashOut2/index.php/welcome/eliminar_usuario";
                param = new FormData();
                param.append("id_Usuario", u.id_Usuario);

                axios.post(url, param)
                    .then(res => {
                        o = res.data;
                        // M.toast({html: o.value});

                        this.cargarUsuarios();
                    })
                    .catch(e => {
                        console.log(e);
                    });


            }




        },

        actualizarUsuario: function() {
            url = "http://localhost/TrashOut2/index.php/welcome/actualizar_usuario";
            param = new FormData();
            param.append("id_Usuario", this.usuarioModal.id_Usuario);
            param.append("Nombre",  this.usuarioModal.Nombre);
            param.append("Email", this.usuarioModal.Email);
            param.append("Apellido_Paterno", this.usuarioModal.Apellido_Paterno);
            param.append("Apellido_Materno",this.usuarioModal.Apellido_Materno);
            param.append("username", this.usuarioModal.username);
            param.append("Fecha_Nacimiento",this.usuarioModal.Fecha_Nacimiento);            
            param.append("clave", this.usuarioModal.clave);
            param.append("Direccion", this.usuarioModal.Direccion);
            param.append("Estado_Usuario",this.usuarioModal.Estado_Usuario);
            param.append("is_admin",this.usuarioModal.is_admin);
            param.append("is_active",this.usuarioModal.is_active);
            

            axios.post(url, param)
                .then(res => {
                    this.o = res.data;
                    alert(this.o);
                    this.cargarUsuarios();


                })
                .catch(e => {
                    console.log(e);
                });






        }


    }




});