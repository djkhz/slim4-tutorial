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
        // if ($uri->getHost() !== 'localhost' && $uri->getScheme() !== 'https') {
        //     $url = (string)$uri->withScheme('https')->withPort(443);
        //     // $response = $this->responseFactory->createResponse();
        //     // Redirect
        //     // $response = $response->withStatus(302)->withHeader('Location', $url);
            
        //     // $response = $response->withStatus(302)->withHeader('Location', $url);;

        // // return $response->withHeader('Location', $url);
        // $response->getBody()->write($uri->getScheme());
        // // $scheme = $request->getHeader("X-Url-Scheme")[0];
        // return var_dump($_SERVER['HTTP_X_FORWARDED_PROTO']);
        // }
        $server = $_SERVER;

        // fix the secure environment detection if behind an AWS ELB
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] !== 'https') {
            $server['HTTPS'] = 'on';
            $server['SERVER_PROTOCOL'] = 'HTTP/2.0';
            $server['REQUEST_SCHEME'] = 'https';
            $url = (string)$uri->withScheme('https')->withPort(443);
            

            // $response->getBody()->write('Hellos Worlds');
        return $response = $response->withStatus(302)->withHeader('Location', $url);
        }
        // return $response>withStatus(302)->withHeader('Location', 'your-new-uri');
        $response->getBody()->write('Hello World');
        return $response;
    });
};
