<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb0c6500a504c\Symfony\Component\Cache\Exception;

use _PhpScoperb0c6500a504c\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperb0c6500a504c\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperb0c6500a504c\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperb0c6500a504c\Psr\Cache\InvalidArgumentException, \_PhpScoperb0c6500a504c\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperb0c6500a504c\Psr\Cache\InvalidArgumentException
    {
    }
}
