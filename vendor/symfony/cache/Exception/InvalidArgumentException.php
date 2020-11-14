<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb09c3ec8e01a\Symfony\Component\Cache\Exception;

use _PhpScoperb09c3ec8e01a\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperb09c3ec8e01a\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperb09c3ec8e01a\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperb09c3ec8e01a\Psr\Cache\InvalidArgumentException, \_PhpScoperb09c3ec8e01a\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperb09c3ec8e01a\Psr\Cache\InvalidArgumentException
    {
    }
}
