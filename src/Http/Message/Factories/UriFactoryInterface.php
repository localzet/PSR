<?php
declare(strict_types=1);

namespace localzet\PSR\Http\Message\Factories;

use InvalidArgumentException;
use localzet\PSR\Http\Message\UriInterface;

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