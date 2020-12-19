<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfb2c402b972b\Symfony\Component\Cache\Exception;

use _PhpScoperfb2c402b972b\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperfb2c402b972b\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperfb2c402b972b\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperfb2c402b972b\Psr\Cache\CacheException, \_PhpScoperfb2c402b972b\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperfb2c402b972b\Psr\Cache\CacheException
    {
    }
}
