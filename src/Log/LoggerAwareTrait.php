<?php
declare(strict_types=1);

namespace localzet\PSR\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 *
 * @package PSR-3 (Logger Interface)
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface|null
     */
    protected ?LoggerInterface $logger = null;

    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }
}