<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper80dbed43490f\Symfony\Component\Cache\Exception;

use _PhpScoper80dbed43490f\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper80dbed43490f\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper80dbed43490f\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper80dbed43490f\Psr\Cache\CacheException, \_PhpScoper80dbed43490f\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper80dbed43490f\Psr\Cache\CacheException
    {
    }
}
