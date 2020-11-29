<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper9d73a84b09ad\Symfony\Component\Cache\Exception;

use _PhpScoper9d73a84b09ad\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper9d73a84b09ad\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper9d73a84b09ad\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper9d73a84b09ad\Psr\Cache\InvalidArgumentException, \_PhpScoper9d73a84b09ad\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper9d73a84b09ad\Psr\Cache\InvalidArgumentException
    {
    }
}
