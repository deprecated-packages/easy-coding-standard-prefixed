<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper58a0a169dcfb\Symfony\Component\Cache\Exception;

use _PhpScoper58a0a169dcfb\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper58a0a169dcfb\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper58a0a169dcfb\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper58a0a169dcfb\Psr\Cache\InvalidArgumentException, \_PhpScoper58a0a169dcfb\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper58a0a169dcfb\Psr\Cache\InvalidArgumentException
    {
    }
}
