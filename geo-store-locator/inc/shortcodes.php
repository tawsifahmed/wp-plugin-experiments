<?php

function geo_store_locator_map_shortcode () {
    $html = '
    <div id="map" style="width: 900px; height: 400px;"></div>

    <script>
    
   
    var map = L.map("map").setView([51.505, -0.09], 13);
    L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "&copy; <a href=\'https://www.openstreetmap.org/copyright\'>OpenStreetMap</a> contributors"
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
    .bindPopup("A pretty CSS popup.<br> Easily customizable.")
    .openPopup();
    </script>
    ';
    return $html;
}

add_shortcode( 'geo_store_locator', 'geo_store_locator_map_shortcode' );