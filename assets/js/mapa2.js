function getData() {
  $.ajax({
    type: "GET",
    url: 'http://localhost/TrashOut2/index.php/welcome/calles',
    dataType: "json",
    success: function (data) {
      $.each(data, function (key, calle) {
        $("#Select").append('<option value=' + calle.idCalle + '>' + calle.Nombre + '</option>');
        
      });
    },
    error: function (data) {
        
    }
  });
}
function initMap() {

  
  var myLatlng = new google.maps.LatLng(-35.844545530588825, -71.59516989532992);
  var myOptions = {
    zoom: 15,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map"), myOptions);

  document.getElementById("submit").addEventListener("click", () => {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      // true for mobile device
      calculateAndDisplayRoute();

    } else {
      // false for not mobile device

      calculateAndDisplayRoute();

    }




  });
}

// Function for adding a marker to the page.
function addMarker(location) {

  marker = new google.maps.Marker({
    position: location,
    map: map,
    icon: "http://localhost/TrashOut2/assets/img/camion-de-la-basura.png"
  });
}

// Testing the addMarker function
function TestMarker(your_selected_value) {

  //console.table(res);
  //CentralPark = new google.maps.LatLng(-35.847552422099135, -71.59308854616972);
  //addMarker(CentralPark);
  $.ajax({
    url: 'http://localhost/TrashOut2/index.php/welcome/tomarCalles',
    type: 'POST',
    data: {

      idCalle: your_selected_value
    },
    success: function (res) {

      var camion = JSON.parse(res);

      CentralPark = new google.maps.LatLng(parseFloat(camion[0].camiLatitud), parseFloat(camion[0].camiLongitud));
      addMarker(CentralPark);
    }

  });
}
function calculateAndDisplayRoute() {


  var your_selected_value = $('#Select option:selected').val();

  $.ajax({
    url: 'http://localhost/TrashOut2/index.php/welcome/tomarCalles',
    type: 'POST',
    data: {

      idCalle: your_selected_value
    },
    success: function (res) {
      generarRuta(res);
      TestMarker(your_selected_value);
    }

  });
}
function generarRuta(res) {
  const arrLat = [];
  const arrLng = [];
  const waypts = [];
  const directionsRenderer = new google.maps.DirectionsRenderer({ suppressMarkers: true });
  const directionsService = new google.maps.DirectionsService();
  if (!res.includes("<h4>A PHP Error was encountered</h4>")) {

    var obj = JSON.parse(res);
   
    posicionCamion = new google.maps.LatLng(parseFloat(obj[0].camiLatitud), parseFloat(obj[0].camiLongitud));

    //SEPARO SUS FILAS
    for (var i = 0; i < obj.length; i++) {
      arrLat.push(parseFloat(obj[i].Latitud));
    }

    for (var i = 0; i < obj.length; i++) {
      arrLng.push(parseFloat(obj[i].Longitud));

    }

    //LAS JUNTO EN UN NUEVO OBJETO
    for (var i = 1; i < (obj.length) - 1; i++) {
      stop = new google.maps.LatLng(arrLat[i], arrLng[i]);

      waypts.push({
        location: stop,
        stopover: true
      });
    }

    directionsService.route(
      {
        origin: {
          //primer stop
          lat: parseFloat(obj[0].Latitud), lng: parseFloat(obj[0].Longitud)
        },
        destination: {
          //ultimo stop
          lat: parseFloat(obj[(obj.length) - 1].Latitud), lng: parseFloat(obj[(obj.length) - 1].Longitud)
        },
        waypoints: waypts,
        travelMode: google.maps.TravelMode.DRIVING,
      },
      (response, status) => {
        if (status === "OK") {
          directionsRenderer.setMap(map);
          directionsRenderer.setDirections(response);
          mostrarTiempo(posicionCamion);
          console.log("Ok");
        } else {

        }
      }
    );
  } else {

    window.alert("No existe ruta a tu direccion el dia de hoy");

  }
}
function mostrarTiempo(posicionCamion) {

  
  var your_selected_value2 = $('#Select option:selected').val();
  $.ajax({
    url: 'http://localhost/TrashOut2/index.php/welcome/distancia',
    type: 'POST',
    data: {

      idCalle: your_selected_value2
    },
    success: function (res) {
      var calle = JSON.parse(res);

      const origin = posicionCamion;
      const destino = new google.maps.LatLng(parseFloat(calle[0].Latitud), parseFloat(calle[0].Longitud));
      const service = new google.maps.DistanceMatrixService();
      service.getDistanceMatrix(
        {
          origins: [origin],
          destinations: [destino],
          travelMode: google.maps.TravelMode.DRIVING,
          unitSystem: google.maps.UnitSystem.metric,
          avoidHighways: false,
          avoidTolls: false
        }, (response, status) => {
          if (status === "OK") {
            
            const tiempo = ((parseFloat(response.rows[0].elements[0].distance.value))/5);
            alert('Quedan: '+tiempo+' minutos para que llegue a tu domicilio');
            
            console.log(parseInt(tiempo)+" Minutos");
          } else {

          }
        }
      );
    }

  });


}
