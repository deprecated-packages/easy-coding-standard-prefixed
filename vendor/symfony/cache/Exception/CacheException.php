<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc83f84c90b60\Symfony\Component\Cache\Exception;

use _PhpScoperc83f84c90b60\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperc83f84c90b60\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc83f84c90b60\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperc83f84c90b60\Psr\Cache\CacheException, \_PhpScoperc83f84c90b60\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperc83f84c90b60\Psr\Cache\CacheException
    {
    }
}
