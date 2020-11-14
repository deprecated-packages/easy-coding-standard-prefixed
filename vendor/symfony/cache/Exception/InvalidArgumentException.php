<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercda2b863d098\Symfony\Component\Cache\Exception;

use _PhpScopercda2b863d098\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScopercda2b863d098\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopercda2b863d098\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopercda2b863d098\Psr\Cache\InvalidArgumentException, \_PhpScopercda2b863d098\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopercda2b863d098\Psr\Cache\InvalidArgumentException
    {
    }
}
