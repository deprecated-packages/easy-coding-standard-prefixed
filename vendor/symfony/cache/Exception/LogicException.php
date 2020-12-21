<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb730595bc9f4\Symfony\Component\Cache\Exception;

use _PhpScoperb730595bc9f4\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperb730595bc9f4\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperb730595bc9f4\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScoperb730595bc9f4\Psr\Cache\CacheException, \_PhpScoperb730595bc9f4\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScoperb730595bc9f4\Psr\Cache\CacheException
    {
    }
}
