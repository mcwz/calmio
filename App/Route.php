<?php

class Route implements \Sys\RouterInterface
{
    private $router;

    public function processRouter()
    {
        $this->router->respond('GET', '/hello', function () {
            return 'Hello World!';
        });
    }




    public function __construct($router)
    {
        $this->router = $router;
    }

    public function setRouter($router)
    {
        $this->router = $router;
    }

    public function getRouter()
    {
        return $this->router;
    }


}