<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class MapController {
    protected Twig $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    public function showMap(Request $request, Response $response, $args): Response
    {
        return $this->view->render($response, 'map.twig', []);
    }
}
