<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc7c7dddc9238\Symfony\Component\Cache\Exception;

use _PhpScoperc7c7dddc9238\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperc7c7dddc9238\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc7c7dddc9238\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperc7c7dddc9238\Psr\Cache\CacheException, \_PhpScoperc7c7dddc9238\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperc7c7dddc9238\Psr\Cache\CacheException
    {
    }
}
