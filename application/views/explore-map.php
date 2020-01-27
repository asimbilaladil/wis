

<!-- Page sub-header -->
<div id="page_header" class="page-subheader">
   <div class="bgback"></div>

   <!-- Animated Sparkles -->
   <div class="th-sparkles"></div>
   <!--/ Animated Sparkles -->
   <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
    <script src="<?php echo base_url("includes/data/bus_stop.geojson") ?>"></script>
    <script src="<?php echo base_url("includes/data/Drinkingwater.geojson") ?>" ></script>
    <script src="<?php echo base_url("includes/data/playground.geojson") ?>"></script>
    <script src="<?php echo base_url("includes/data/road.geojson") ?>"></script>

    <script src="<?php echo base_url("includes/data/hotel.geojson") ?>"></script>
 
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <style>
      html, body {
        height: 100%;
        padding: 0;
        margin: 0;
      }
      #map {
        /* configure the size of the map */
        width: 100%;
        height: 100%;
      }
    </style>
   <!-- Sub-Header content wrapper -->

<!--/ Page sub-header -->

<!-- Product page content section with custom top padding -->
<section id="content" class="hg_section ptop-60">
   <div class="container">
      <div class="row">
         <!-- Content with right sidebar -->


         <div id="map"></div>
    <script>
      // initialize Leaflet
    
      function drinkingwaterStyle(features) {
          return{
              fillColor: 'orange',
              weight: 2,
              opacity: 1,
              color: 'orange',
              dashArray: 3,
              fillOpacity: 0.7

          }

      }
      function roadStyle(features) {
          return{
              fillColor: 'purple',
              weight: 2,
              opacity: 1,
              color: 'purple',
              dashArray: 3,
              fillOpacity: 0.7

          }

      }
      
      function playStyle(features) {
          return{
              fillColor: 'blue',
              weight: 2,
              opacity: 1,
              color: 'blue',
              dashArray: 3,
              fillOpacity: 0.7

          }

      }
      var geojsonMarkerOptions = {
    radius: 8,
    fillColor: "#ff7800",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.8
};
var geojsonMarkerOptions1 = {
    radius: 8,
    fillColor: "red",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.8
};
      function onClick(e) {
      alert('Pure and Free Drinking Water Available Here');
}
      var map = L.map('map').setView({lon: 10.133318, lat: 54.322285}, 13);

      // add the OpenStreetMap tiles
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
      }).addTo(map);
    //   var map = L.map('map').setView([43.8476, 18.3564], 13);
     
   
      // show the scale bar on the lower left corner
      L.control.scale().addTo(map);
    //   var DrinkingwaterLayer =  L.geoJson(Drinkingwater).addTo(map);
      // show a marker on the map
      
      L.marker({lon: 10.133318 , lat: 54.322285}).bindPopup('<a href="https://en.wikipedia.org/wiki/Kiel">Information About Kiel City</a>').addTo(map);
      var busLayer = L.geoJson(
          Drinkingwater,
          {style: drinkingwaterStyle}
          ).addTo(map).on('mouseover', onClick);
      var bus_stopLayer = L.geoJson(
          busstop
          ).addTo(map);
      var road = L.geoJson(
          road,
          {style: roadStyle}
          ).addTo(map).bindPopup('<h1>Main Road</h1></br><p>Bus route 62 from bahnhof, Thanks</p>');
  
     var hotel = L.geoJson(hotel, {
    pointToLayer: function (feature, latlng) {
        return L.circleMarker(latlng, geojsonMarkerOptions);
    }
}).bindPopup('<a href="https://www.booking.com/"><h1>Hotel</h1></br>For booking please click me</a>').addTo(map);
    //   var play = L.geoJson(
    //         playground,
    //       {style: playStyle}
    //       ).addTo(map);
     var playg = L.geoJson(playground, {
    pointToLayer: function (feature, latlng) {
        return L.circleMarker(latlng, geojsonMarkerOptions1);
    }
}).addTo(map);
     var overlayMaps = {
         'Hotel': hotel,
         'Playground': playg,
         'Road': road,
         'Bus Stop': bus_stopLayer,
          'Drinking Water': busLayer
     };
  L.control.layers(overlayMaps).addTo(map);
  
    </script>
     



         <!-- .summary -->
      </div>
      <!--/ main-data col-sm-7 -->
   </div>

   </div>
   <!--/ Product -->
   </div>
   </div>
   <!--/ row -->
   </div>
   <!--/ container -->
</section>
<!--/ Product page content section with custom top padding -->
