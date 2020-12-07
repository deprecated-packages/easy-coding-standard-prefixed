<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopereb8678af2407\Symfony\Component\Cache\Exception;

use _PhpScopereb8678af2407\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScopereb8678af2407\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopereb8678af2407\Psr\SimpleCache\CacheException::class)) {
    class LogicException extends \LogicException implements \_PhpScopereb8678af2407\Psr\Cache\CacheException, \_PhpScopereb8678af2407\Psr\SimpleCache\CacheException
    {
    }
} else {
    class LogicException extends \LogicException implements \_PhpScopereb8678af2407\Psr\Cache\CacheException
    {
    }
}
