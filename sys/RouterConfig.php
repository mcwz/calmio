<?php
/**
 * Created by PhpStorm.
 * User: sheld
 * Date: 2017/5/31
 * Time: 17:15
 */

namespace Sys;


abstract class RouterConfig implements RouterConfigInterface
{
    protected $router;

    public function setRouter($router)
    {
        if($this->router==null)
            $this->router=$router;
    }

    public abstract function config();

    public function getRouter()
    {
        return $this->router;
    }
}