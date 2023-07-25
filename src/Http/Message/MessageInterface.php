<?php

namespace localzet\PSR\Http\Message;

/**
 * HTTP messages consist of requests from a client to a server and responses
 * from a server to a client. This interface defines the methods common to
 * each.
 *
 * Messages are considered immutable; all methods that might change state MUST
 * be implemented such that they retain the internal state of the current
 * message and return an instance that contains the changed state.
 *
 * @package PSR-7 (HTTP Message Interfaces)
 *
 * @link http://www.ietf.org/rfc/rfc7230.txt
 * @link http://www.ietf.org/rfc/rfc7231.txt
 */
interface MessageInterface
{
    /**
     * Get query.
     *
     * @param string|null $name
     * @param mixed|null $default
     * @return mixed
     */
    public function get(string $name = null, mixed $default = null): mixed;

    /**
     * Get post.
     *
     * @param string|null $name
     * @param mixed|null $default
     * @return mixed
     */
    public function post(string $name = null, mixed $default = null): mixed;

    /**
     * Get header item by name.
     *
     * @param string|null $name
     * @param mixed|null $default
     * @return mixed
     */
    public function header(string $name = null, mixed $default = null): mixed;

    /**
     * Get http raw head.
     *
     * @return string
     */
    public function rawHead(): string;

    /**
     * Get http raw body.
     *
     * @return string
     */
    public function rawBody(): string;
    
    /**
     * Get raw buffer.
     *
     * @return string
     */
    public function rawBuffer(): string;
}