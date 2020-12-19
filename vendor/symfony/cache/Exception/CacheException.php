<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper065e4ba46e6d\Symfony\Component\Cache\Exception;

use _PhpScoper065e4ba46e6d\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper065e4ba46e6d\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper065e4ba46e6d\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper065e4ba46e6d\Psr\Cache\CacheException, \_PhpScoper065e4ba46e6d\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper065e4ba46e6d\Psr\Cache\CacheException
    {
    }
}
