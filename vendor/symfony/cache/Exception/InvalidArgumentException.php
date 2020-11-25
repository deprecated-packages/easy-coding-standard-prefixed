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

use _PhpScoperca8ca183ac38\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperca8ca183ac38\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperca8ca183ac38\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperca8ca183ac38\Psr\Cache\InvalidArgumentException, \_PhpScoperca8ca183ac38\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperca8ca183ac38\Psr\Cache\InvalidArgumentException
    {
    }
}
