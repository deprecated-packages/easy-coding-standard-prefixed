<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper06c5fb6c14ed\Symfony\Component\Cache\Exception;

use _PhpScoper06c5fb6c14ed\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper06c5fb6c14ed\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper06c5fb6c14ed\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper06c5fb6c14ed\Psr\Cache\InvalidArgumentException, \_PhpScoper06c5fb6c14ed\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper06c5fb6c14ed\Psr\Cache\InvalidArgumentException
    {
    }
}
