<?php

namespace localzet\PSR\Http\Message;

/**
 * @package PSR-17 (HTTP Factories)
 */
interface RequestFactoryInterface
{
    /**
     * Create a new request.
     *
     * @param string $method The HTTP method associated with the request.
     * @param string|UriInterface $uri The URI associated with the request. If
     *     the value is a string, the factory MUST create a UriInterface
     *     instance based on it.
     *
     * @return RequestInterface
     */
    public function createRequest(string $method, string|UriInterface $uri): RequestInterface;
}