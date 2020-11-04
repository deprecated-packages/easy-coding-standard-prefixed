<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb383f16e851e\Symfony\Component\Cache\Exception;

use _PhpScoperb383f16e851e\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperb383f16e851e\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperb383f16e851e\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperb383f16e851e\Psr\Cache\CacheException, \_PhpScoperb383f16e851e\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperb383f16e851e\Psr\Cache\CacheException
    {
    }
}
