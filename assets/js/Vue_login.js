new Vue({
    el: 'main',
    data: {
        username: '',
        clave: ''


    },
    created: function () {


    },
    mounted: function () {




    },
    methods: {

        insertar: function () {
            url = "http://localhost/TrashOut2/index.php/welcome/login";
        param = new FormData();
            param.append("username", this.username);
            param.append("clave", this.clave);

            axios.post(url, param)
                    .then(res => {

                        if (res.data.ruta !== "") {
                               
                         
                            window.location.href = res.data.ruta;
                        } else {
                           // M.toast({html: res.data.value});
                        }
                    })
                    .catch(e => {
                        console.log(e);
                    });
        }









    }



});

