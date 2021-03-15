<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper8a7636b3fdaf\Symfony\Component\Cache\Exception;

use _PhpScoper8a7636b3fdaf\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper8a7636b3fdaf\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper8a7636b3fdaf\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper8a7636b3fdaf\Psr\Cache\CacheException, \_PhpScoper8a7636b3fdaf\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper8a7636b3fdaf\Psr\Cache\CacheException
    {
    }
}
