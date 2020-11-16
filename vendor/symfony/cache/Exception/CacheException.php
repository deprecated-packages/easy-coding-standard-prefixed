<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedc2e0c967db\Symfony\Component\Cache\Exception;

use _PhpScoperedc2e0c967db\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperedc2e0c967db\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperedc2e0c967db\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperedc2e0c967db\Psr\Cache\CacheException, \_PhpScoperedc2e0c967db\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperedc2e0c967db\Psr\Cache\CacheException
    {
    }
}
