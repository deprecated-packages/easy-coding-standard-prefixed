<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper4e2df00556a9\Symfony\Component\Cache\Exception;

use _PhpScoper4e2df00556a9\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper4e2df00556a9\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper4e2df00556a9\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper4e2df00556a9\Psr\Cache\CacheException, \_PhpScoper4e2df00556a9\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper4e2df00556a9\Psr\Cache\CacheException
    {
    }
}
