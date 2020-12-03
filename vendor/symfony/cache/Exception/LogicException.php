<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5c006f5f032f\Symfony\Component\Cache\Exception;

use _PhpScoper5c006f5f032f\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper5c006f5f032f\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper5c006f5f032f\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper5c006f5f032f\Psr\Cache\CacheException, \_PhpScoper5c006f5f032f\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper5c006f5f032f\Psr\Cache\CacheException
    {
    }
}
