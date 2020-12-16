<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb6a8e65b492c\Symfony\Component\Cache\Exception;

use _PhpScoperb6a8e65b492c\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperb6a8e65b492c\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperb6a8e65b492c\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperb6a8e65b492c\Psr\Cache\CacheException, \_PhpScoperb6a8e65b492c\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperb6a8e65b492c\Psr\Cache\CacheException
    {
    }
}
