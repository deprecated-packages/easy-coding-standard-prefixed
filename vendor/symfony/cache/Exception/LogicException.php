<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf77bffce0320\Symfony\Component\Cache\Exception;

use _PhpScoperf77bffce0320\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperf77bffce0320\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperf77bffce0320\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperf77bffce0320\Psr\Cache\CacheException, \_PhpScoperf77bffce0320\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperf77bffce0320\Psr\Cache\CacheException
    {
    }
}
