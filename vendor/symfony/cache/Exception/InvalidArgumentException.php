<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper8acb416c2f5a\Symfony\Component\Cache\Exception;

use _PhpScoper8acb416c2f5a\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper8acb416c2f5a\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper8acb416c2f5a\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper8acb416c2f5a\Psr\Cache\InvalidArgumentException, \_PhpScoper8acb416c2f5a\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper8acb416c2f5a\Psr\Cache\InvalidArgumentException
    {
    }
}
