<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Middleware.
 */
final class HttpsMiddleware implements MiddlewareInterface
{
    /**
     * @var ResponseFactoryInterface
     */
    private $responseFactory;

    /**
     * The constructor.
     *
     * @param ResponseFactoryInterface $responseFactory The response factory
     */
    public function __construct(ResponseFactoryInterface $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    /**
     * Invoke middleware.
     *
     * @param ServerRequestInterface $request The request
     * @param RequestHandlerInterface $handler The handler
     *
     * @return ResponseInterface The response
     */
    public function process(
        ServerRequestInterface $request, 
        RequestHandlerInterface $handler
    ): ResponseInterface {
        $uri = $request->getUri();
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] !== 'https') {
            $server['HTTPS'] = 'on';
            $server['SERVER_PROTOCOL'] = 'HTTP/2.0';
            $server['REQUEST_SCHEME'] = 'https';
            $url = (string)$uri->withScheme('https')->withPath(str_replace((string)$uri->getPath(),'/public'))->withPort(443);
            // url = (string)$uri->withPath()

            // $response->getBody()->write('Hellos Worlds');
        // return $response = $response->withStatus(302)->withHeader('Location', $url);

        // if ($uri->getHost() !== 'localhost' && $uri->getScheme() !== 'https') {
        //     $url = (string)$uri->withScheme('https')->withPort(443);

             $response = $this->responseFactory->createResponse();

             // Redirect
            $response = $response->withStatus(302)->withHeader('Location', $url);
            
             return $response;
        }

        return $handler->handle($request);
    }
}