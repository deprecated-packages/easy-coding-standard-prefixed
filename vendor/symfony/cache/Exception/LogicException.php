<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper64ca614e27fd\Symfony\Component\Cache\Exception;

use _PhpScoper64ca614e27fd\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper64ca614e27fd\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper64ca614e27fd\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper64ca614e27fd\Psr\Cache\CacheException, \_PhpScoper64ca614e27fd\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper64ca614e27fd\Psr\Cache\CacheException
    {
    }
}
