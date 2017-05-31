<?php
namespace App\Config;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Router extends \Sys\RouterConfig
{

    public function config()
    {
        $this->router->map('GET', '/', function (ServerRequestInterface $request, ResponseInterface $response) {
            $response->getBody()->write('<h1>Hello, World!</h1>');

            return $response;
        });
    }
}