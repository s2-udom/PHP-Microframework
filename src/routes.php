<?php
use Slim\App;
use App\Controllers\WeatherController;

return function (App $app) {
    // Simple test route
    $app->get('/', function ($request, $response, $args) {
        return $response->write("Hello, world!");
    });
    // Weather route
    $app->get('/weather', [WeatherController::class, 'showWeather']);
};
