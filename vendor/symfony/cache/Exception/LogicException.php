<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper0c0702cca4ac\Symfony\Component\Cache\Exception;

use _PhpScoper0c0702cca4ac\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper0c0702cca4ac\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper0c0702cca4ac\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper0c0702cca4ac\Psr\Cache\CacheException, \_PhpScoper0c0702cca4ac\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper0c0702cca4ac\Psr\Cache\CacheException
    {
    }
}
