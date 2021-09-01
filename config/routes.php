<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class)->setName('home');
    $app->get('/home', \App\Action\HomeAction::class)->setName('home');
    $app->get('/hame/xw', \App\Action\HomeAction::class)->setName('home');
    $app->get('/users/{id}', \App\Action\UserReadAction::class);
    $app->post('/users', \App\Action\UserCreateAction::class);
};
