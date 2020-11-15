<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper49c742f5a4ee\Symfony\Component\Cache\Exception;

use _PhpScoper49c742f5a4ee\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper49c742f5a4ee\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper49c742f5a4ee\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper49c742f5a4ee\Psr\Cache\CacheException, \_PhpScoper49c742f5a4ee\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper49c742f5a4ee\Psr\Cache\CacheException
    {
    }
}
