<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera909b9d9be2e\Symfony\Component\Cache\Exception;

use _PhpScopera909b9d9be2e\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScopera909b9d9be2e\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopera909b9d9be2e\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopera909b9d9be2e\Psr\Cache\InvalidArgumentException, \_PhpScopera909b9d9be2e\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopera909b9d9be2e\Psr\Cache\InvalidArgumentException
    {
    }
}
