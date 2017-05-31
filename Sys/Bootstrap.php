<?php
namespace Sys;

class Bootstrap
{
    public function boot()
    {
        $containerInit=new ContainerInit();
        return $containerInit->getContainer();
    }
}