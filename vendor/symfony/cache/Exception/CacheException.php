<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper6ec31b85adcf\Symfony\Component\Cache\Exception;

use _PhpScoper6ec31b85adcf\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper6ec31b85adcf\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper6ec31b85adcf\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper6ec31b85adcf\Psr\Cache\CacheException, \_PhpScoper6ec31b85adcf\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper6ec31b85adcf\Psr\Cache\CacheException
    {
    }
}
