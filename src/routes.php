<?php
use Slim\App;
use App\Controllers\WeatherController;
use App\Controllers\MapController;
use App\Controllers\NewsController;
use Slim\Views\Twig;

return function (App $app) {

    // Weather route
    $app->get('/weather', [WeatherController::class, 'showWeather']);

    // Map route
    $app->get('/map', function ($request, $response, $args) {
        $view = Twig::fromRequest($request);
        $controller = new MapController($view);
        return $controller->showMap($request, $response, $args);
    });

    // News route
    $app->get('/news', function ($request, $response, $args) {
        $view = Twig::fromRequest($request);
        $controller = new NewsController($view);
        return $controller->showNews($request, $response, $args);
    });
};
