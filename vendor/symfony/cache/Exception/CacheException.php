<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab9510cd5d97\Symfony\Component\Cache\Exception;

use _PhpScoperab9510cd5d97\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperab9510cd5d97\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperab9510cd5d97\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperab9510cd5d97\Psr\Cache\CacheException, \_PhpScoperab9510cd5d97\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperab9510cd5d97\Psr\Cache\CacheException
    {
    }
}
