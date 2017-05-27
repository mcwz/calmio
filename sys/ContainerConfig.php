<?php
use function DI\object;
return [
//    // Bind an interface to an implementation
//    ArticleRepository::class => object(InMemoryArticleRepository::class),
//    // Configure Twig
//    Twig_Environment::class => function () {
//        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../src/SuperBlog/Views');
//        return new Twig_Environment($loader);
//    },
    'Config' => new \Noodlehaus\Config([APP_PATH.'config/config.php', APP_PATH.'config/database.php']),
    'Route' => new \Klein\Klein()
];