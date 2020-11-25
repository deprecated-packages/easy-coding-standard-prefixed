<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper2f75f00bf6fa\Symfony\Component\Cache\Exception;

use _PhpScoper2f75f00bf6fa\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper2f75f00bf6fa\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper2f75f00bf6fa\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper2f75f00bf6fa\Psr\Cache\CacheException, \_PhpScoper2f75f00bf6fa\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper2f75f00bf6fa\Psr\Cache\CacheException
    {
    }
}
