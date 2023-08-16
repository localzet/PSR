<?php
declare(strict_types=1);

namespace localzet\PSR\Log;

/**
 * This is a simple Logger implementation that other Loggers can inherit from.
 *
 * It simply delegates all log-level-specific methods to the `log` method to
 * reduce boilerplate code that a simple Logger that does the same thing with
 * messages regardless of the error level has to implement.
 *
 * @package PSR-3 (Logger Interface)
 */
abstract class AbstractLogger implements LoggerInterface
{
    use LoggerTrait;
}