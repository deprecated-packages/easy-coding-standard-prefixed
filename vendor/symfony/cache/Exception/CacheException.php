<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere015d8a3273c\Symfony\Component\Cache\Exception;

use _PhpScopere015d8a3273c\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScopere015d8a3273c\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopere015d8a3273c\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScopere015d8a3273c\Psr\Cache\CacheException, \_PhpScopere015d8a3273c\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScopere015d8a3273c\Psr\Cache\CacheException
    {
    }
}
