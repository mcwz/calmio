<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Test
{
    public function testing(ServerRequestInterface $request, ResponseInterface $responds)
    {
        $responds->getBody()->write("hello wo");
        return $responds;
    }
}