<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd1a5bf00e83e\Symfony\Component\Cache\Exception;

use _PhpScoperd1a5bf00e83e\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperd1a5bf00e83e\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperd1a5bf00e83e\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperd1a5bf00e83e\Psr\Cache\CacheException, \_PhpScoperd1a5bf00e83e\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperd1a5bf00e83e\Psr\Cache\CacheException
    {
    }
}
