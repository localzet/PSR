<?php
declare(strict_types=1);

namespace localzet\PSR\Http\Message\Factories;

use InvalidArgumentException;
use localzet\PSR\Http\Message\StreamInterface;
use localzet\PSR\Http\Message\UploadedFileInterface;
use const UPLOAD_ERR_OK;

interface UploadedFileFactoryInterface
{
    /**
     * Create a new uploaded file.
     *
     * If a size is not provided it will be determined by checking the size of
     * the file.
     *
     * @param StreamInterface $stream Underlying stream representing the
     *     uploaded file content.
     * @param int|null $size in bytes
     * @param int $error PHP file upload error
     * @param string|null $clientFilename Filename as provided by the client, if any.
     * @param string|null $clientMediaType Media type as provided by the client, if any.
     *
     * @return UploadedFileInterface
     *
     * @throws InvalidArgumentException If the file resource is not readable.
     * @package PSR-17 (HTTP Factories)
     *
     * @see http://php.net/manual/features.file-upload.post-method.php
     * @see http://php.net/manual/features.file-upload.errors.php
     */
    public function createUploadedFile(
        StreamInterface $stream,
        int             $size = null,
        int             $error = UPLOAD_ERR_OK,
        string          $clientFilename = null,
        string          $clientMediaType = null
    ): UploadedFileInterface;
}