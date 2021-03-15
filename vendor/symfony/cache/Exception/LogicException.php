<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper971ef29294dd\Symfony\Component\Cache\Exception;

use _PhpScoper971ef29294dd\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper971ef29294dd\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper971ef29294dd\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper971ef29294dd\Psr\Cache\CacheException, \_PhpScoper971ef29294dd\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper971ef29294dd\Psr\Cache\CacheException
    {
    }
}
