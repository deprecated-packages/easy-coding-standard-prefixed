<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaba240c3d5f1\Symfony\Component\Cache\Exception;

use _PhpScoperaba240c3d5f1\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperaba240c3d5f1\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperaba240c3d5f1\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperaba240c3d5f1\Psr\Cache\InvalidArgumentException, \_PhpScoperaba240c3d5f1\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperaba240c3d5f1\Psr\Cache\InvalidArgumentException
    {
    }
}
