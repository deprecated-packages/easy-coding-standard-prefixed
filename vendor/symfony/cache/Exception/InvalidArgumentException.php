<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper2f75f00bf6fa\Symfony\Component\Cache\Exception;

use _PhpScoper2f75f00bf6fa\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper2f75f00bf6fa\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper2f75f00bf6fa\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper2f75f00bf6fa\Psr\Cache\InvalidArgumentException, \_PhpScoper2f75f00bf6fa\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper2f75f00bf6fa\Psr\Cache\InvalidArgumentException
    {
    }
}
