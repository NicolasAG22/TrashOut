new Vue({
	el: 'main',
	data: {

        camiones: '',
        choferes: '',
		usuarios: '',
		o:''
	},

	created: function () {
        this.choferesTotal();
        this.camionesRuta();
        this.usuariosTotal();
	},

	mounted: function () {


	},

	methods: {

		choferesTotal: function () {
			url = "http://localhost/TrashOut2/index.php/welcome/choferesTotal";
			axios.post(url)
				.then(res => {
                    this.choferes = res.data[0].contador;
					console.log(res.data[0].contador);
					
                })
                
				.catch(e => {
					console.log(e);
				});



		},



		camionesRuta: function () {
			url = "http://localhost/TrashOut2/index.php/welcome/camionesRuta";

			


			axios.post(url)
				.then(res => {
					this.camiones = res.data[0].contador;
				})
				.catch(e => {
					console.log(e);
				});



        },
        usuariosTotal: function () {
			url = "http://localhost/TrashOut2/index.php/welcome/usuariosTotal";

			
			axios.post(url)
				.then(res => {
					this.usuarios = res.data[0].contador;
				})
				.catch(e => {
					console.log(e);
				});



		}
	}


});
