<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper7f5523334c1b\Symfony\Component\Cache\Exception;

use _PhpScoper7f5523334c1b\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper7f5523334c1b\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper7f5523334c1b\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper7f5523334c1b\Psr\Cache\InvalidArgumentException, \_PhpScoper7f5523334c1b\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper7f5523334c1b\Psr\Cache\InvalidArgumentException
    {
    }
}
