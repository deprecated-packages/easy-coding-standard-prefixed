<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc8fea59b0cb1\Symfony\Component\Cache\Exception;

use _PhpScoperc8fea59b0cb1\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperc8fea59b0cb1\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc8fea59b0cb1\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperc8fea59b0cb1\Psr\Cache\CacheException, \_PhpScoperc8fea59b0cb1\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperc8fea59b0cb1\Psr\Cache\CacheException
    {
    }
}
