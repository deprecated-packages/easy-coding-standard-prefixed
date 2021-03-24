<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera609aff833be\Symfony\Component\Cache\Exception;

use _PhpScopera609aff833be\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScopera609aff833be\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopera609aff833be\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopera609aff833be\Psr\Cache\InvalidArgumentException, \_PhpScopera609aff833be\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopera609aff833be\Psr\Cache\InvalidArgumentException
    {
    }
}
