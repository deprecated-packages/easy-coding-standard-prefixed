<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad68e34a80c5\Symfony\Component\Cache\Exception;

use _PhpScoperad68e34a80c5\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperad68e34a80c5\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperad68e34a80c5\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperad68e34a80c5\Psr\Cache\CacheException, \_PhpScoperad68e34a80c5\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperad68e34a80c5\Psr\Cache\CacheException
    {
    }
}
