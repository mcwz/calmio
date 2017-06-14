<?php
namespace Sys;

class Bootstrap
{
    public function boot()
    {
        return Service::get_container();
    }
}