<?php
/**
 * Created by PhpStorm.
 * User: sheld
 * Date: 2017/5/27
 * Time: 15:37
 */

namespace Sys;


interface RouterInterface
{
    public function setRouter($router);
    public function processRouter();
    public function getRouter();
}