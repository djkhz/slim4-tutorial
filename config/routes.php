<?php

use Slim\App;

return function (App $app) {

    $app->get('/', \App\Action\HomeAction::class)->setName('home');
    $app->get('/home', \App\Action\HomeAction::class)->setName('home');
    $app->get('/hame/xw', \App\Action\HomeAction::class)->setName('home');
    $app->get('/users/{id}', \App\Action\UserReadAction::class);
    $app->post('/users', \App\Action\UserCreateAction::class);

    $app->get('/test', function ($request, $response, array $args) {
        $uri = $request->getUri();
        if(! $request->secure()) {
        if ($uri->getHost() !== 'localhost' && $uri->getScheme() !== 'https') {
            $url = (string)$uri->withScheme('https')->withPort(443);
            // $response = $this->responseFactory->createResponse();
            // Redirect
            // $response = $response->withStatus(302)->withHeader('Location', $url);
            
            // $response = $response->withStatus(302)->withHeader('Location', $url);;

        // return $response->withHeader('Location', $url);
        $response->getBody()->write($uri->getScheme());
        return var_dump($request->getMethod());
        }
        // return $response>withStatus(302)->withHeader('Location', 'your-new-uri');
        $response->getBody()->write('Hello World');
        return $response;
    });
};
