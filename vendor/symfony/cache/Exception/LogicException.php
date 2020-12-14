<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc64a4ac1af35\Symfony\Component\Cache\Exception;

use _PhpScoperc64a4ac1af35\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperc64a4ac1af35\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc64a4ac1af35\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperc64a4ac1af35\Psr\Cache\CacheException, \_PhpScoperc64a4ac1af35\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperc64a4ac1af35\Psr\Cache\CacheException
    {
    }
}
