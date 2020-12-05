<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb6ccec8ab642\Symfony\Component\Cache\Exception;

use _PhpScoperb6ccec8ab642\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperb6ccec8ab642\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperb6ccec8ab642\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperb6ccec8ab642\Psr\Cache\CacheException, \_PhpScoperb6ccec8ab642\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperb6ccec8ab642\Psr\Cache\CacheException
    {
    }
}
