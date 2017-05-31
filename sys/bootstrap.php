<?php
namespace Sys;



class BootStrap
{
    public function boot()
    {
        $containerInit=new ContainerInit();
        return $containerInit->getContainer();
    }
}