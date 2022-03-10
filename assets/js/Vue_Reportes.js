new Vue({
	el: 'main',
	data: {
		
		logCamion: [],
		o:''

	},
	created: function () {
		
		this.CargarReporte();
	},
	mounted: function () {


	},
	methods: {

		
		CargarReporte: function () {
			url = "http://localhost/TrashOut2/index.php/welcome/logCamion";
			axios.post(url)
				.then(res => {
					this.logCamion = res.data;
				})
				.catch(e => {
					console.log(e);
				});


		}









	}

});
