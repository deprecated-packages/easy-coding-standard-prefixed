<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd47a2fa2a77e\Symfony\Component\Cache\Exception;

use _PhpScoperd47a2fa2a77e\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperd47a2fa2a77e\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperd47a2fa2a77e\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperd47a2fa2a77e\Psr\Cache\InvalidArgumentException, \_PhpScoperd47a2fa2a77e\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperd47a2fa2a77e\Psr\Cache\InvalidArgumentException
    {
    }
}
