<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfcee700af3df\Symfony\Component\Cache\Exception;

use _PhpScoperfcee700af3df\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperfcee700af3df\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperfcee700af3df\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperfcee700af3df\Psr\Cache\InvalidArgumentException, \_PhpScoperfcee700af3df\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperfcee700af3df\Psr\Cache\InvalidArgumentException
    {
    }
}
