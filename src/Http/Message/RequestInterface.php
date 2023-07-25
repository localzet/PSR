<?php

namespace localzet\PSR\Http\Message;

/**
 * Representation of an outgoing, client-side request.
 *
 * Per the HTTP specification, this interface includes properties for
 * each of the following:
 *
 * - Protocol version
 * - HTTP method
 * - URI
 * - Headers
 * - Message body
 *
 * During construction, implementations MUST attempt to set the Host header from
 * a provided URI if no Host header is provided.
 *
 * Requests are considered immutable; all methods that might change state MUST
 * be implemented such that they retain the internal state of the current
 * message and return an instance that contains the changed state.
 *
 * @package PSR-7 (HTTP Message Interfaces)
 */
interface RequestInterface extends MessageInterface
{
    /**
     * @return string
     */
    public function queryString(): string;

    /**
     * @return string
     */
    public function uri(): string;

    /**
     * @return string
     */
    public function method(): string;

    /**
     * Get http protocol version.
     *
     * @return string
     */
    public function protocolVersion(): string;

    /**
     * Get host.
     *
     * @param bool $withoutPort
     * @return string|null
     */
    public function host(bool $withoutPort = false): ?string;

    /**
     * Get path.
     *
     * @return string
     */
    public function path(): string;
}