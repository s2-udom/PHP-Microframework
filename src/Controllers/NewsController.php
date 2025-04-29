<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class NewsController
{
    protected Twig $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }
    public function showNews(Request $request, Response $response, array $args)
    {
        return $this->view->render($response, 'news.twig', []);
    }
}
