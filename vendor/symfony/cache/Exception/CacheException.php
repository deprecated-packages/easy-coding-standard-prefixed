<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc75fd40d7a6e\Symfony\Component\Cache\Exception;

use _PhpScoperc75fd40d7a6e\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperc75fd40d7a6e\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc75fd40d7a6e\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperc75fd40d7a6e\Psr\Cache\CacheException, \_PhpScoperc75fd40d7a6e\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperc75fd40d7a6e\Psr\Cache\CacheException
    {
    }
}
