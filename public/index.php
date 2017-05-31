<?php
define('PUB_DIR',__DIR__);
define('ROOT',PUB_DIR."/../");
define('APP_PATH',ROOT.'app/');
define('SYS_PATH',ROOT.'sys/');
require ROOT.'vendor/autoload.php';

$boot=new \Sys\BootStrap();
$container=$boot->boot();
//echo $container->get('config')->get('version');