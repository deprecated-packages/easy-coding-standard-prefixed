<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Exception;

use _PhpScoperc4ea0f0bd23f\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperc4ea0f0bd23f\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc4ea0f0bd23f\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperc4ea0f0bd23f\Psr\Cache\InvalidArgumentException, \_PhpScoperc4ea0f0bd23f\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperc4ea0f0bd23f\Psr\Cache\InvalidArgumentException
    {
    }
}
