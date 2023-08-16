<?php
declare(strict_types=1);

namespace localzet\PSR\EventDispatcher;

/**
 * Defines a dispatcher for events.
 *
 * @package PSR-14 (Event Dispatcher)
 */
interface EventDispatcherInterface
{
    /**
     * Provide all relevant listeners with an event to process.
     *
     * @param object $event
     *   The object to process.
     *
     * @return object
     *   The Event that was passed, now modified by listeners.
     */
    public function dispatch(object $event);
}