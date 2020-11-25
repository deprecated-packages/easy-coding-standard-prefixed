<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Exception;

use _PhpScoperdc8fbcd7c69d\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperdc8fbcd7c69d\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperdc8fbcd7c69d\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperdc8fbcd7c69d\Psr\Cache\CacheException, \_PhpScoperdc8fbcd7c69d\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperdc8fbcd7c69d\Psr\Cache\CacheException
    {
    }
}
