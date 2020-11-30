<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera09818bc50da\Symfony\Component\Cache\Exception;

use _PhpScopera09818bc50da\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScopera09818bc50da\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopera09818bc50da\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScopera09818bc50da\Psr\Cache\CacheException, \_PhpScopera09818bc50da\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScopera09818bc50da\Psr\Cache\CacheException
    {
    }
}
