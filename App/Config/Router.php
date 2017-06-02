<?php
namespace App\Config;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Router extends \Sys\RouterConfig
{

    public function config()
    {
        $this->router->map('GET', '/', 'App\Controllers\Home::index');
    }
}