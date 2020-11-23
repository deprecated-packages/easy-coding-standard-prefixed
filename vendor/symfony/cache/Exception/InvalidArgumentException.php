<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere341acab57d4\Symfony\Component\Cache\Exception;

use _PhpScopere341acab57d4\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScopere341acab57d4\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopere341acab57d4\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopere341acab57d4\Psr\Cache\InvalidArgumentException, \_PhpScopere341acab57d4\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopere341acab57d4\Psr\Cache\InvalidArgumentException
    {
    }
}
