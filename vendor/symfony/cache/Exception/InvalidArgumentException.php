<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere050faf861e6\Symfony\Component\Cache\Exception;

use _PhpScopere050faf861e6\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScopere050faf861e6\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopere050faf861e6\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopere050faf861e6\Psr\Cache\InvalidArgumentException, \_PhpScopere050faf861e6\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopere050faf861e6\Psr\Cache\InvalidArgumentException
    {
    }
}
