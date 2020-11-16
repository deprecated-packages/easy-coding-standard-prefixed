<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedc2e0c967db\Symfony\Component\Cache\Exception;

use _PhpScoperedc2e0c967db\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperedc2e0c967db\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperedc2e0c967db\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperedc2e0c967db\Psr\Cache\InvalidArgumentException, \_PhpScoperedc2e0c967db\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperedc2e0c967db\Psr\Cache\InvalidArgumentException
    {
    }
}
