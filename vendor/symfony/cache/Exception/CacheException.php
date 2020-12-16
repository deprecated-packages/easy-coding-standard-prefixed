<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd35c27cd4b09\Symfony\Component\Cache\Exception;

use _PhpScoperd35c27cd4b09\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperd35c27cd4b09\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperd35c27cd4b09\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperd35c27cd4b09\Psr\Cache\CacheException, \_PhpScoperd35c27cd4b09\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperd35c27cd4b09\Psr\Cache\CacheException
    {
    }
}
