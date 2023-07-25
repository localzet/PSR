<?php

namespace localzet\PSR\Http\Client;

use Throwable;

/**
 * Every HTTP client related exception MUST implement this interface.
 *
 * @package PSR-18 (HTTP Client)
 */
interface ClientExceptionInterface extends Throwable
{
}