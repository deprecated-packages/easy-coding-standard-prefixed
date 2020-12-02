<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc95ae4bf942a\Symfony\Component\Cache\Exception;

use _PhpScoperc95ae4bf942a\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperc95ae4bf942a\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc95ae4bf942a\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperc95ae4bf942a\Psr\Cache\CacheException, \_PhpScoperc95ae4bf942a\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperc95ae4bf942a\Psr\Cache\CacheException
    {
    }
}
