<?php
declare(strict_types=1);

namespace localzet\PSR\Clock;

use DateTimeImmutable;

/**
 * @package PSR-20 (Clock)
 */
interface ClockInterface
{
    /**
     * Returns the current time as a DateTimeImmutable Object
     */
    public function now(): DateTimeImmutable;
}