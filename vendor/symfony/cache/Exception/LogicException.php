<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper776637f3d3c3\Symfony\Component\Cache\Exception;

use _PhpScoper776637f3d3c3\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper776637f3d3c3\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper776637f3d3c3\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper776637f3d3c3\Psr\Cache\CacheException, \_PhpScoper776637f3d3c3\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper776637f3d3c3\Psr\Cache\CacheException
    {
    }
}
