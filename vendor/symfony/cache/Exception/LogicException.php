<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper8b97b0dd6f5b\Symfony\Component\Cache\Exception;

use _PhpScoper8b97b0dd6f5b\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper8b97b0dd6f5b\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper8b97b0dd6f5b\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper8b97b0dd6f5b\Psr\Cache\CacheException, \_PhpScoper8b97b0dd6f5b\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper8b97b0dd6f5b\Psr\Cache\CacheException
    {
    }
}
