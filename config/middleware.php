<?php

use Selective\BasePath\BasePathMiddleware;
use Slim\App;
use Slim\Middleware\ErrorMiddleware;
use App\Middleware\HttpsMiddleware;

return function (App $app) {
    // Parse json, form data and xml
    $app->addBodyParsingMiddleware();

    // Add the Slim built-in routing middleware
    $app->addRoutingMiddleware();
    
    $app->add(BasePathMiddleware::class);
    
    //$app->add(HttpsMiddleware::class);
    // Handle exceptions
    $app->add(ErrorMiddleware::class);
};
