<?php

use Slim\App;
use Slim\Views\TwigMiddleware;
use Slim\Middleware\ErrorMiddleware;

return function (App $app) {
    $app->addBodyParsingMiddleware();
    $app->addRoutingMiddleware();
    $app->add(TwigMiddleware::class);
    // $app->add(ErrorMiddleware::class);
};
