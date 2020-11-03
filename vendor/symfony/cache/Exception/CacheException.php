<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper83a475a0590e\Symfony\Component\Cache\Exception;

use _PhpScoper83a475a0590e\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper83a475a0590e\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper83a475a0590e\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper83a475a0590e\Psr\Cache\CacheException, \_PhpScoper83a475a0590e\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper83a475a0590e\Psr\Cache\CacheException
    {
    }
}
