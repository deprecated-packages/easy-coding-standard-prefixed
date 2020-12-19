<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper065e4ba46e6d\Symfony\Component\Cache\Exception;

use _PhpScoper065e4ba46e6d\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper065e4ba46e6d\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper065e4ba46e6d\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper065e4ba46e6d\Psr\Cache\InvalidArgumentException, \_PhpScoper065e4ba46e6d\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper065e4ba46e6d\Psr\Cache\InvalidArgumentException
    {
    }
}
