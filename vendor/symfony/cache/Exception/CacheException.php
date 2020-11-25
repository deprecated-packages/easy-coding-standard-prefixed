<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd301db66c80c\Symfony\Component\Cache\Exception;

use _PhpScoperd301db66c80c\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperd301db66c80c\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperd301db66c80c\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperd301db66c80c\Psr\Cache\CacheException, \_PhpScoperd301db66c80c\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperd301db66c80c\Psr\Cache\CacheException
    {
    }
}
