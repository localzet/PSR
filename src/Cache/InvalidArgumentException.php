<?php
declare(strict_types=1);

namespace localzet\PSR\Cache;

/**
 * Exception interface for invalid cache arguments.
 *
 * Any time an invalid argument is passed into a method it must throw an
 * exception class which implements localzet\PSR\Cache\InvalidArgumentException.
 *
 * @package PSR-6 (Caching Interface)
 */
interface InvalidArgumentException extends CacheException
{
}