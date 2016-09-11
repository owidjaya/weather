<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
$container = new \Slim\Container;
$container = [
    "settings" => [
        'displayErrorDetails' => false,
        'yahooURL' => "http://query.yahooapis.com/v1/public/yql",
        'yqlQuery' => 'select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="%s")',
    ]
];
// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('templates/', [
        // 'cache' => 'cache/'
        'cache' => false
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));

    return $view;
};
$container['Controller\WeatherController'] = function($container) {
    return new Controller\WeatherController($container);
};

$app = new \Slim\App($container);
$app->get('/', 'Controller\WeatherController:index'); 
$app->get('/weather', 'Controller\WeatherController:query');
$app->run();