<?php
declare(strict_types=1);

namespace localzet\PSR\Http\Message\Factories;

use localzet\PSR\Http\Message\ServerRequestInterface;
use localzet\PSR\Http\Message\UriInterface;

/**
 * @package PSR-17 (HTTP Factories)
 */
interface ServerRequestFactoryInterface
{
    /**
     * Create a new server request.
     *
     * Note that server-params are taken precisely as given - no parsing/processing
     * of the given values is performed, and, in particular, no attempt is made to
     * determine the HTTP method or URI, which must be provided explicitly.
     *
     * @param string $method The HTTP method associated with the request.
     * @param string|UriInterface $uri The URI associated with the request. If
     *     the value is a string, the factory MUST create a UriInterface
     *     instance based on it.
     * @param array $serverParams Array of SAPI parameters with which to seed
     *     the generated request instance.
     *
     * @return ServerRequestInterface
     */
    public function createServerRequest(string $method, string|UriInterface $uri, array $serverParams = []): ServerRequestInterface;
}