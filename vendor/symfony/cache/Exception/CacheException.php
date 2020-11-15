<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper207eb8f99af3\Symfony\Component\Cache\Exception;

use _PhpScoper207eb8f99af3\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper207eb8f99af3\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper207eb8f99af3\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper207eb8f99af3\Psr\Cache\CacheException, \_PhpScoper207eb8f99af3\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper207eb8f99af3\Psr\Cache\CacheException
    {
    }
}
