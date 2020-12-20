<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere205696a9dd6\Symfony\Component\Cache\Exception;

use _PhpScopere205696a9dd6\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScopere205696a9dd6\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopere205696a9dd6\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScopere205696a9dd6\Psr\Cache\CacheException, \_PhpScopere205696a9dd6\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScopere205696a9dd6\Psr\Cache\CacheException
    {
    }
}
