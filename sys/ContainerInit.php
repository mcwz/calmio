<?php
namespace Sys;


class ContainerInit
{
    private $container;

    public function __construct()
    {
        $this->container = new \League\Container\Container;
        $this->init();
    }

    private function define()
    {
        $this->container->add('config', new \Noodlehaus\Config([APP_PATH . 'config/config.php', APP_PATH . 'config/database.php']));

        $this->container->add('router', new \App\Config\Router());

        $this->container->share('response', \Zend\Diactoros\Response::class);
        $this->container->share('request', function () {
            return \Zend\Diactoros\ServerRequestFactory::fromGlobals(
                $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
            );
        });

        $this->container->share('emitter', \Zend\Diactoros\Response\SapiEmitter::class);

        $route = new \League\Route\RouteCollection($this->container);

        $this->container->get("router")->setRouter($route);
        $this->container->get("router")->config();
        $route =$this->container->get("router")->getRouter();

        $response = $route->dispatch($this->container->get('request'), $this->container->get('response'));

        $this->container->get('emitter')->emit($response);
    }

    public function getContainer()
    {
        return $this->container;
    }

    private function init()
    {
        $this->define();

        if (file_exists(APP_PATH . 'config/ContainerConfig.php')) {
            //$appContainerConfig = require_once(APP_PATH . 'config/ContainerConfig.php');
            $appContainerConfig=new \App\Config\ContainerConfig();
            $appContainerConfig->setContainer($this->container);
            $appContainerConfig->config();
            $this->container=$appContainerConfig->getContainer();
        }

    }
}