<?php
/**
 * Created by PhpStorm.
 * User: sheld
 * Date: 2017/5/31
 * Time: 15:33
 */

namespace Sys;


interface ContainerConfigInterface
{
    public function setContainer($container);
    public function getContainer();
}