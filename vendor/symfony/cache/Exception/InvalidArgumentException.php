<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf6b7f9bf122d\Symfony\Component\Cache\Exception;

use _PhpScoperf6b7f9bf122d\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperf6b7f9bf122d\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperf6b7f9bf122d\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperf6b7f9bf122d\Psr\Cache\InvalidArgumentException, \_PhpScoperf6b7f9bf122d\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperf6b7f9bf122d\Psr\Cache\InvalidArgumentException
    {
    }
}
