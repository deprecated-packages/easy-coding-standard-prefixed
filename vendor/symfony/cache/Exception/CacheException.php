<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperae959d396e95\Symfony\Component\Cache\Exception;

use _PhpScoperae959d396e95\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperae959d396e95\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperae959d396e95\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperae959d396e95\Psr\Cache\CacheException, \_PhpScoperae959d396e95\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperae959d396e95\Psr\Cache\CacheException
    {
    }
}
