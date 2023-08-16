<?php
declare(strict_types=1);

namespace localzet\PSR\Log;

/**
 * Describes log levels.
 *
 * @package PSR-3 (Logger Interface)
 */
class LogLevel
{
    const EMERGENCY = 'emergency';
    const ALERT = 'alert';
    const CRITICAL = 'critical';
    const ERROR = 'error';
    const WARNING = 'warning';
    const NOTICE = 'notice';
    const INFO = 'info';
    const DEBUG = 'debug';
}