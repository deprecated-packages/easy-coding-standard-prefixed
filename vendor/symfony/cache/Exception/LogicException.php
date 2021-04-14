<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper7b319b4d8e1c\Symfony\Component\Cache\Exception;

use _PhpScoper7b319b4d8e1c\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper7b319b4d8e1c\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper7b319b4d8e1c\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper7b319b4d8e1c\Psr\Cache\CacheException, \_PhpScoper7b319b4d8e1c\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper7b319b4d8e1c\Psr\Cache\CacheException
    {
    }
}
