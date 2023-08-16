<?php
declare(strict_types=1);

namespace localzet\PSR\SimpleCache;

use Throwable;

/**
 * Interface used for all types of exceptions thrown by the implementing library.
 *
 * @package PSR-16 (Simple Cache)
 */
interface CacheException extends Throwable
{
}