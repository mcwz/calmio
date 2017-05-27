<?php

class Route implements \Sys\RouterInterface
{
    private $router;

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

    public function processRouter()
    {
        
    }
}