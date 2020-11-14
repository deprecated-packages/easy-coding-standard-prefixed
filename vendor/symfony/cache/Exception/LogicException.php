<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperddde3ba4aebc\Symfony\Component\Cache\Exception;

use _PhpScoperddde3ba4aebc\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperddde3ba4aebc\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperddde3ba4aebc\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperddde3ba4aebc\Psr\Cache\CacheException, \_PhpScoperddde3ba4aebc\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperddde3ba4aebc\Psr\Cache\CacheException
    {
    }
}
