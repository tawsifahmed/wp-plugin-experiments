<?php

function geo_store_locator_map_shortcode ($atts) {
    $html = '
    <h4>Map ID = '.$atts['id'].'</h4>
    <div id="map" style="width: 900px; height: 400px;"></div>

    <script>
    var map = L.map("map").setView([51.505, -0.09], 13);
    L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "&copy; <a href=\'https://www.openstreetmap.org/copyright\'>OpenStreetMap</a> contributors"
    }).addTo(map);';

    $maps = get_post_meta($atts['id'], 'maps', true);

    if(is_array($maps) && !empty($maps)){
        foreach($maps as $map){

            $html .='L.marker(['. $map['latitude'] .', '.$map['longitude'].']).addTo(map)
            .bindPopup("'.$map['$title'].'");';
        }
    }

   
    $html .='
    </script>
    ';

    // return var_dump($map);
    return $html;
}

add_shortcode( 'geo_store_locator', 'geo_store_locator_map_shortcode' );