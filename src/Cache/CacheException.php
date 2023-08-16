<?php
declare(strict_types=1);

namespace localzet\PSR\Cache;

use Throwable;

/**
 * Exception interface for all exceptions thrown by an Implementing Library.
 *
 * @package PSR-6 (Caching Interface)
 */
interface CacheException extends Throwable
{
}