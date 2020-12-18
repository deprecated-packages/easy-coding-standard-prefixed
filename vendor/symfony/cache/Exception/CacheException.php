<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper4d3fa30a680b\Symfony\Component\Cache\Exception;

use _PhpScoper4d3fa30a680b\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper4d3fa30a680b\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper4d3fa30a680b\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper4d3fa30a680b\Psr\Cache\CacheException, \_PhpScoper4d3fa30a680b\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper4d3fa30a680b\Psr\Cache\CacheException
    {
    }
}
