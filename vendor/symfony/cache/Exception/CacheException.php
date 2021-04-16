<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper0752b31150a1\Symfony\Component\Cache\Exception;

use _PhpScoper0752b31150a1\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper0752b31150a1\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(SimpleCacheInterface::class)) {
    class CacheException extends \Exception implements Psr6CacheInterface, SimpleCacheInterface
    {
    }
} else {
    class CacheException extends \Exception implements Psr6CacheInterface
    {
    }
}
