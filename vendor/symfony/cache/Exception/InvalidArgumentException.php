<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper96c81c3c1716\Symfony\Component\Cache\Exception;

use _PhpScoper96c81c3c1716\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper96c81c3c1716\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(SimpleCacheInterface::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements Psr6CacheInterface, SimpleCacheInterface
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements Psr6CacheInterface
    {
    }
}
