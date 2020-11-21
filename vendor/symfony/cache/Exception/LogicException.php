<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper224ae0b86670\Symfony\Component\Cache\Exception;

use _PhpScoper224ae0b86670\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper224ae0b86670\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper224ae0b86670\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper224ae0b86670\Psr\Cache\CacheException, \_PhpScoper224ae0b86670\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper224ae0b86670\Psr\Cache\CacheException
    {
    }
}
