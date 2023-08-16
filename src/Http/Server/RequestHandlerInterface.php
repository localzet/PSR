<?php
declare(strict_types=1);

namespace localzet\PSR\Http\Server;

use localzet\PSR\Http\Message\{ResponseInterface, ServerRequestInterface};

/**
 * Handles a server request and produces a response.
 *
 * An HTTP request handler process an HTTP request in order to produce an
 * HTTP response.
 *
 * @package PSR-15 (HTTP Server)
 */
interface RequestHandlerInterface
{
    /**
     * Handles a request and produces a response.
     *
     * May call other collaborating code to generate the response.
     */
    public function handle(ServerRequestInterface $request): ResponseInterface;
}