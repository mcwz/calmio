<?php
namespace Sys;


abstract class ContainerConfig implements ContainerConfigInterface
{
    protected $container;
    public function setContainer($container)
    {
        if($this->container==null)
            $this->container=$container;
    }

    public abstract function config();

    public function getContainer()
    {
        return $this->container;
    }
}