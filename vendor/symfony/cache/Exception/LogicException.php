<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc7096eb2567d\Symfony\Component\Cache\Exception;

use _PhpScoperc7096eb2567d\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperc7096eb2567d\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc7096eb2567d\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperc7096eb2567d\Psr\Cache\CacheException, \_PhpScoperc7096eb2567d\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperc7096eb2567d\Psr\Cache\CacheException
    {
    }
}
