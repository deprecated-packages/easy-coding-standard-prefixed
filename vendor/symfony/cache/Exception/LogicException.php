<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper81b3ff5ab9fe\Symfony\Component\Cache\Exception;

use _PhpScoper81b3ff5ab9fe\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper81b3ff5ab9fe\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper81b3ff5ab9fe\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper81b3ff5ab9fe\Psr\Cache\CacheException, \_PhpScoper81b3ff5ab9fe\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper81b3ff5ab9fe\Psr\Cache\CacheException
    {
    }
}
