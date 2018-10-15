<?php

namespace Safe;

use Safe\Exceptions\OpcacheException;

/**
 * This function compiles a PHP script and adds it to the opcode cache without
 * executing it. This can be used to prime the cache after a Web server
 * restart by pre-caching files that will be included in later requests.
 *
 * @param string $file The path to the PHP script to be compiled.
 * @throws OpcacheException
 *
 */
function opcache_compile_file(string $file): void
{
    error_clear_last();
    $result = \opcache_compile_file($file);
    if ($result === false) {
        throw OpcacheException::createFromPhpError();
    }
}
