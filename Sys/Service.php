<?php
/**
 * Created by PhpStorm.
 * User: sheld
 * Date: 2017/6/8
 * Time: 15:04
 */

namespace Sys;


class Service
{
    /**
     * Cache for instance of any services that
     * have been requested as a "shared" instance.
     *
     * @var array
     */
    static protected $instances=null;

    public static function get_container()
    {
        return self::getInstance();
    }

    protected static function getInstance()
    {
        if (! isset(static::$instances) || static::$instances==null)
        {
            $containerInit=new ContainerInit();
            static::$instances = $containerInit->getContainer();
        }

        return static::$instances;
    }
}