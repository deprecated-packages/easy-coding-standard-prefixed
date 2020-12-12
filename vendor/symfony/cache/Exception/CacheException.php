<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper11a6395266c4\Symfony\Component\Cache\Exception;

use _PhpScoper11a6395266c4\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper11a6395266c4\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper11a6395266c4\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper11a6395266c4\Psr\Cache\CacheException, \_PhpScoper11a6395266c4\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper11a6395266c4\Psr\Cache\CacheException
    {
    }
}
