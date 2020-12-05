<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper02b5d1bf8fec\Symfony\Component\Cache\Exception;

use _PhpScoper02b5d1bf8fec\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper02b5d1bf8fec\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper02b5d1bf8fec\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper02b5d1bf8fec\Psr\Cache\CacheException, \_PhpScoper02b5d1bf8fec\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper02b5d1bf8fec\Psr\Cache\CacheException
    {
    }
}
