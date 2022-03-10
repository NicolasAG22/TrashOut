new Vue({
	el: 'main',
	data: {

		id_Marca: '',
		Nombre_Marca: '',
		Modelo: '',
		marcaM: [],
		marcaModal: {},
		o:''
	},

	created: function () {
		this.cargarMarca();
	},

	mounted: function () {


	},

	methods: {

		cargarMarca: function () {
			url = "http://localhost/TrashOut2/index.php/welcome/marca";
			axios.post(url)
				.then(res => {
					this.marcaM = res.data;
				})
				.catch(e => {
					console.log(e);
				});



		},



		insertarmarca: function () {
			url = "http://localhost/TrashOut2/index.php/welcome/insertar_marca";

			param = new FormData();
			param.append("Nombre_Marca", this.Nombre_Marca);
			param.append("Modelo", this.Modelo);


			axios.post(url, param)
				.then(res => {
					this.o = res.data;
					alert(this.o);
					this.Nombre_Marca="";
					this.Modelo="";
					this.cargarMarca();
					
				})
				.catch(e => {
					console.log(e);
				});



		},

		cargaModal: function (m) {
			this.marcaModal = m;
			var elem = document.querySelector('.modal');




		},
		eliminarmarca: function (m) {
			if (confirm("Esta seguro de eliminar la marca " + m.Nombre_Marca + " ?")) {
				url = "http://localhost/TrashOut2/index.php/welcome/eliminar_marca";
				param = new FormData();
				param.append("id_Marca", m.id_Marca);

				axios.post(url, param)
					.then(res => {
						o = res.data;
						// M.toast({html: o.value});

						this.cargarMarca();
					})
					.catch(e => {
						console.log(e);
					});


			}




		},

		actualizarMarca: function () {
			url = "http://localhost/TrashOut2/index.php/welcome/actualizar_marca";
			param = new FormData();
			param.append("id_Marca", this.marcaModal.id_Marca);
			param.append("Nombre_Marca", this.marcaModal.Nombre_Marca);
			param.append("Modelo", this.marcaModal.Modelo);


			axios.post(url, param)
				.then(res => {
					this.o = res.data;
                    alert(this.o);
					this.cargarMarca();
				})
				.catch(e => {
					console.log(e);
				});






		}











	}













});
