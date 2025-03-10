<?php

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Set up Twig
$twig = Twig::create(__DIR__ . '/../templates', ['cache' => false]);
$app->add(TwigMiddleware::create($app, $twig));

// Load routes
$routes = require __DIR__ . '/../src/routes.php';
if (is_callable($routes)) {

    $routes($app);
} else {
    throw new RuntimeException('Routes file did not return a callable function.');
}

$app->run();
