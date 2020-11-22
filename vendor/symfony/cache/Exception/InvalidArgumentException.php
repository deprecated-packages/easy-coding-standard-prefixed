<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc5bee3a837bb\Symfony\Component\Cache\Exception;

use _PhpScoperc5bee3a837bb\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperc5bee3a837bb\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc5bee3a837bb\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperc5bee3a837bb\Psr\Cache\InvalidArgumentException, \_PhpScoperc5bee3a837bb\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperc5bee3a837bb\Psr\Cache\InvalidArgumentException
    {
    }
}
