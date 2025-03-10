<?php
namespace App\Controllers;

class MapController {
    public function showMap($request, $response, $args) {
        // Your MapBox API logic goes here (refer to your current map.html script)
        return $this->get('view')->render($response, 'map.html');
    }
}
