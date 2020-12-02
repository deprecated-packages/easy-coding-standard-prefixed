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

use _PhpScoperc95ae4bf942a\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperc95ae4bf942a\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc95ae4bf942a\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperc95ae4bf942a\Psr\Cache\InvalidArgumentException, \_PhpScoperc95ae4bf942a\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperc95ae4bf942a\Psr\Cache\InvalidArgumentException
    {
    }
}
