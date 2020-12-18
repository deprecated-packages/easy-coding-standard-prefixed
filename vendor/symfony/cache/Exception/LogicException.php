<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd8b12759ee0d\Symfony\Component\Cache\Exception;

use _PhpScoperd8b12759ee0d\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperd8b12759ee0d\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperd8b12759ee0d\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperd8b12759ee0d\Psr\Cache\CacheException, \_PhpScoperd8b12759ee0d\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperd8b12759ee0d\Psr\Cache\CacheException
    {
    }
}
