<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaba240c3d5f1\Symfony\Component\Cache\Exception;

use _PhpScoperaba240c3d5f1\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperaba240c3d5f1\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperaba240c3d5f1\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperaba240c3d5f1\Psr\Cache\CacheException, \_PhpScoperaba240c3d5f1\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperaba240c3d5f1\Psr\Cache\CacheException
    {
    }
}
