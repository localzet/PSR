<?php
declare(strict_types=1);

namespace localzet\PSR\SimpleCache;

/**
 * Exception interface for invalid cache arguments.
 *
 * When an invalid argument is passed it must throw an exception which implements
 * this interface
 *
 * @package PSR-16 (Simple Cache)
 */
interface InvalidArgumentException extends CacheException
{
}