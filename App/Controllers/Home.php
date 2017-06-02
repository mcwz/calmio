<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Home
{
    public function index(ServerRequestInterface $request, ResponseInterface $responds)
    {
        $responds->getBody()->write("hello , I'm calmio .");
        return $responds;
    }
}