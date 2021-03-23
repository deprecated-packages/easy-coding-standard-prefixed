<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5e93f39f19fe\Symfony\Component\Cache\Exception;

use _PhpScoper5e93f39f19fe\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper5e93f39f19fe\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper5e93f39f19fe\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper5e93f39f19fe\Psr\Cache\InvalidArgumentException, \_PhpScoper5e93f39f19fe\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper5e93f39f19fe\Psr\Cache\InvalidArgumentException
    {
    }
}
