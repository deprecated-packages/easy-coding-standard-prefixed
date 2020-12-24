<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera37d6fb0b1ab\Symfony\Component\Cache\Exception;

use _PhpScopera37d6fb0b1ab\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScopera37d6fb0b1ab\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopera37d6fb0b1ab\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopera37d6fb0b1ab\Psr\Cache\InvalidArgumentException, \_PhpScopera37d6fb0b1ab\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopera37d6fb0b1ab\Psr\Cache\InvalidArgumentException
    {
    }
}
