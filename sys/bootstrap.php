<?php
namespace Sys;

class BootStrap
{
    public function boot()
    {
        $containerBuilder = new \DI\ContainerBuilder;
        $containerBuilder->addDefinitions(__DIR__ . '/ContainerConfig.php');
        $container = $containerBuilder->build();
        return $container;
    }
}