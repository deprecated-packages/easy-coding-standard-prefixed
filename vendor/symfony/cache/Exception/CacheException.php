<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperca8ca183ac38\Symfony\Component\Cache\Exception;

use _PhpScoperca8ca183ac38\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoperca8ca183ac38\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperca8ca183ac38\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoperca8ca183ac38\Psr\Cache\CacheException, \_PhpScoperca8ca183ac38\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoperca8ca183ac38\Psr\Cache\CacheException
    {
    }
}
