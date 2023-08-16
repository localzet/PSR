<?php
declare(strict_types=1);

namespace localzet\PSR\EventDispatcher;

/**
 * Mapper from an event to the listeners that are applicable to that event.
 *
 * @package PSR-14 (Event Dispatcher)
 */
interface ListenerProviderInterface
{
    /**
     * @param object $event
     *   An event for which to return the relevant listeners.
     * @return iterable<callable>
     *   An iterable (array, iterator, or generator) of callables.  Each
     *   callable MUST be type-compatible with $event.
     */
    public function getListenersForEvent(object $event): iterable;
}