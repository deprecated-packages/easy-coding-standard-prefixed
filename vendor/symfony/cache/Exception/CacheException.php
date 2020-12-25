<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper92597f5b42a7\Symfony\Component\Cache\Exception;

use _PhpScoper92597f5b42a7\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper92597f5b42a7\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper92597f5b42a7\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper92597f5b42a7\Psr\Cache\CacheException, \_PhpScoper92597f5b42a7\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper92597f5b42a7\Psr\Cache\CacheException
    {
    }
}
