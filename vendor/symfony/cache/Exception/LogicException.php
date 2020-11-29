<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercae980ebf12d\Symfony\Component\Cache\Exception;

use _PhpScopercae980ebf12d\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScopercae980ebf12d\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopercae980ebf12d\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScopercae980ebf12d\Psr\Cache\CacheException, \_PhpScopercae980ebf12d\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScopercae980ebf12d\Psr\Cache\CacheException
    {
    }
}
