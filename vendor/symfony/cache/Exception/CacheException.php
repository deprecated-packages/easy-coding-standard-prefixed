<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera6f918786d5c\Symfony\Component\Cache\Exception;

use _PhpScopera6f918786d5c\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScopera6f918786d5c\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopera6f918786d5c\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScopera6f918786d5c\Psr\Cache\CacheException, \_PhpScopera6f918786d5c\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScopera6f918786d5c\Psr\Cache\CacheException
    {
    }
}
