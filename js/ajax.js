/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var vista = new ol.View({
    center: ol.proj.fromLonLat([-74.11779, 4.65637]),
    zoom: 6
});

var map = new ol.Map({
    target: 'map',
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        })
    ],
    view: vista
});

function VerInformacion() {

    var lugar = $.trim($("#sitio").val());

    if (lugar == "") {
        alert("ingrese un lugar");
    } else {

        var data;
        $.ajax({
            type: "POST",
            url: "src/Control/ControlWeather.php",
            async: false,
            dataType: 'json',
            data: {
                opcion: 1,
                busqueda: lugar
            },
            success: function (retu) {
                data = retu;
            }
        });

        console.log(data);

        var informacion_clima = data.current_observation;
        var viento = informacion_clima.wind;
        var atmosferico = informacion_clima.atmosphere;
        var condicion = informacion_clima.condition;
        var locacion = data.location;

        $("#temp").html(viento.chill + " F°");
        $("#dir").html(viento.direction);
        $("#vel").html(viento.speed + "mph");

        $("#hum").html(atmosferico.humidity + "%");
        $("#visi").html(atmosferico.visibility);
        $("#pre").html(atmosferico.pressure);


        $("#con").html(condicion.temperature + "F° " + condicion.text);
        /*
         
         <li>Humedad : <span id="hum" class="badge badge-light">100%</span></li>
         <li>Visibilidad: <span id="visi" class="badge badge-light">9.51</span></li>
         <li>Presion : <span id="pre" class="badge badge-light">21.82</span></li>
         
         */

        Centrar(locacion.lat, locacion.long);

    }
}

function Centrar(lat, long) {
    map.getView().setCenter(ol.proj.transform([long, lat], 'EPSG:4326', 'EPSG:3857'));
    map.getView().setZoom(8);
}