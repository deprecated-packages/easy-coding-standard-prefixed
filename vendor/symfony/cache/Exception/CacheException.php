<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper21763e6c7ac4\Symfony\Component\Cache\Exception;

use _PhpScoper21763e6c7ac4\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper21763e6c7ac4\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper21763e6c7ac4\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper21763e6c7ac4\Psr\Cache\CacheException, \_PhpScoper21763e6c7ac4\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper21763e6c7ac4\Psr\Cache\CacheException
    {
    }
}
