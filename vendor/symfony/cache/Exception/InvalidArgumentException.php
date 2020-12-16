<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd35c27cd4b09\Symfony\Component\Cache\Exception;

use _PhpScoperd35c27cd4b09\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperd35c27cd4b09\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperd35c27cd4b09\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperd35c27cd4b09\Psr\Cache\InvalidArgumentException, \_PhpScoperd35c27cd4b09\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperd35c27cd4b09\Psr\Cache\InvalidArgumentException
    {
    }
}
