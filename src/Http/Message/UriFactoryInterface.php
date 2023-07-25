<?php

namespace localzet\PSR\Http\Message;

use InvalidArgumentException;

/**
 * @package PSR-17 (HTTP Factories)
 */
interface UriFactoryInterface
{
    /**
     * Create a new URI.
     *
     * @param string $uri
     *
     * @return UriInterface
     *
     * @throws InvalidArgumentException If the given URI cannot be parsed.
     */
    public function createUri(string $uri = ''): UriInterface;
}