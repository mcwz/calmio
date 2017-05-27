<?php
define('PUB_DIR',__DIR__);
define('ROOT',PUB_DIR."/../");
define('APP_PATH',ROOT.'app/');
define('SYS_PATH',ROOT.'sys/');
require ROOT.'vendor/autoload.php';

$conf = Noodlehaus\Config::load([APP_PATH.'config.php',APP_PATH.'database.php']);

$klein = new \Klein\Klein();

$klein->respond('GET', '/hello-world', function () {
    return 'Hello World!';
});

$klein->respond('GET', '/', function () {
    return 'Hello '.time().'!';
});

$klein->dispatch();