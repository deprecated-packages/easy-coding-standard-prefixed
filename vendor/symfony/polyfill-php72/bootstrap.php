<?php

namespace _PhpScoperf7b66f9e3817;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoperf7b66f9e3817\Symfony\Polyfill\Php72 as p;
if ('\\' === \DIRECTORY_SEPARATOR && !\function_exists('sapi_windows_vt100_support')) {
    function sapi_windows_vt100_support()
    {
        return \false;
    }
}
if (!\function_exists('stream_isatty')) {
    function stream_isatty($stream)
    {
        return \function_exists('posix_isatty') && @\posix_isatty($stream);
    }
}
if (!\function_exists('utf8_encode')) {
    function utf8_encode($s)
    {
        return \_PhpScoperf7b66f9e3817\Symfony\Polyfill\Php72\Php72::utf8_encode($s);
    }
    function utf8_decode($s)
    {
        return \_PhpScoperf7b66f9e3817\Symfony\Polyfill\Php72\Php72::utf8_decode($s);
    }
}
