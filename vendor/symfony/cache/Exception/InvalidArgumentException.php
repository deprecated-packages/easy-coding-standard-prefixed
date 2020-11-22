<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper21fff473f90a\Symfony\Component\Cache\Exception;

use _PhpScoper21fff473f90a\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper21fff473f90a\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper21fff473f90a\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper21fff473f90a\Psr\Cache\InvalidArgumentException, \_PhpScoper21fff473f90a\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper21fff473f90a\Psr\Cache\InvalidArgumentException
    {
    }
}
