<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper2b44cb0c30af\Symfony\Component\Cache\Exception;

use _PhpScoper2b44cb0c30af\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper2b44cb0c30af\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper2b44cb0c30af\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper2b44cb0c30af\Psr\Cache\CacheException, \_PhpScoper2b44cb0c30af\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper2b44cb0c30af\Psr\Cache\CacheException
    {
    }
}
