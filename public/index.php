<?php
define('PUB_DIR',__DIR__);
define('ROOT',PUB_DIR."/../");
define('APP_PATH',ROOT.'App/');
define('VIEW_PATH',APP_PATH.'View/');
define('SYS_PATH',ROOT.'Sys/');
require ROOT.'vendor/autoload.php';

$boot=new \Sys\Bootstrap();
$container=$boot->boot();