<?php
declare(strict_types=1);

namespace localzet\PSR\Http\Client;

use localzet\PSR\Http\Message\{RequestInterface, ResponseInterface};

/**
 * @package PSR-18 (HTTP Client)
 */
interface ClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(RequestInterface $request): ResponseInterface;
}