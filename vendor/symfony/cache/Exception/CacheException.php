<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc8b83ee8976a\Symfony\Component\Cache\Exception;

use _PhpScoperc8b83ee8976a\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperc8b83ee8976a\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc8b83ee8976a\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperc8b83ee8976a\Psr\Cache\CacheException, \_PhpScoperc8b83ee8976a\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperc8b83ee8976a\Psr\Cache\CacheException
    {
    }
}
