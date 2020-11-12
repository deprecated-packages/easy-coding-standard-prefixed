<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3d6b50c3ca2f\Symfony\Component\Cache\Exception;

use _PhpScoper3d6b50c3ca2f\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper3d6b50c3ca2f\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper3d6b50c3ca2f\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper3d6b50c3ca2f\Psr\Cache\InvalidArgumentException, \_PhpScoper3d6b50c3ca2f\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper3d6b50c3ca2f\Psr\Cache\InvalidArgumentException
    {
    }
}
