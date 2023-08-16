<?php
declare(strict_types=1);

namespace localzet\PSR\Log;

/**
 * Describes a logger-aware instance.
 *
 * @package PSR-3 (Logger Interface)
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(LoggerInterface $logger): void;
}