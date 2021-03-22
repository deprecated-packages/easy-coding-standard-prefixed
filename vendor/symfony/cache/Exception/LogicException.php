<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper82aa0193482e\Symfony\Component\Cache\Exception;

use _PhpScoper82aa0193482e\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper82aa0193482e\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper82aa0193482e\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoper82aa0193482e\Psr\Cache\CacheException, \_PhpScoper82aa0193482e\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoper82aa0193482e\Psr\Cache\CacheException
    {
    }
}
