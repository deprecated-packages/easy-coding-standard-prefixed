<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera3425146d487\Symfony\Component\Cache\Exception;

use _PhpScopera3425146d487\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScopera3425146d487\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopera3425146d487\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopera3425146d487\Psr\Cache\InvalidArgumentException, \_PhpScopera3425146d487\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopera3425146d487\Psr\Cache\InvalidArgumentException
    {
    }
}
