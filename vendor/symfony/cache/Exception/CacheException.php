<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper1103e00fb46b\Symfony\Component\Cache\Exception;

use _PhpScoper1103e00fb46b\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper1103e00fb46b\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper1103e00fb46b\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper1103e00fb46b\Psr\Cache\CacheException, \_PhpScoper1103e00fb46b\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper1103e00fb46b\Psr\Cache\CacheException
    {
    }
}
