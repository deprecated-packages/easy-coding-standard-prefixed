<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfcf15c26e033\Symfony\Component\Cache\Exception;

use _PhpScoperfcf15c26e033\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperfcf15c26e033\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperfcf15c26e033\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperfcf15c26e033\Psr\Cache\CacheException, \_PhpScoperfcf15c26e033\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperfcf15c26e033\Psr\Cache\CacheException
    {
    }
}
