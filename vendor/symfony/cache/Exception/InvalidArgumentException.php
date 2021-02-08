<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper7faa8deb0d3c\Symfony\Component\Cache\Exception;

use _PhpScoper7faa8deb0d3c\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper7faa8deb0d3c\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper7faa8deb0d3c\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper7faa8deb0d3c\Psr\Cache\InvalidArgumentException, \_PhpScoper7faa8deb0d3c\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper7faa8deb0d3c\Psr\Cache\InvalidArgumentException
    {
    }
}
