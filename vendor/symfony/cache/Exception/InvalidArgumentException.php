<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper48b5ec5b60cf\Symfony\Component\Cache\Exception;

use _PhpScoper48b5ec5b60cf\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper48b5ec5b60cf\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper48b5ec5b60cf\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper48b5ec5b60cf\Psr\Cache\InvalidArgumentException, \_PhpScoper48b5ec5b60cf\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper48b5ec5b60cf\Psr\Cache\InvalidArgumentException
    {
    }
}
