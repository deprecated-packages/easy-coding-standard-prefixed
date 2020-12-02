<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera34ae19e8d40\Symfony\Component\Cache\Exception;

use _PhpScopera34ae19e8d40\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScopera34ae19e8d40\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopera34ae19e8d40\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopera34ae19e8d40\Psr\Cache\InvalidArgumentException, \_PhpScopera34ae19e8d40\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopera34ae19e8d40\Psr\Cache\InvalidArgumentException
    {
    }
}
