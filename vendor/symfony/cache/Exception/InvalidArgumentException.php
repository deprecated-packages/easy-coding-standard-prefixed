<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc753ccca5a0c\Symfony\Component\Cache\Exception;

use _PhpScoperc753ccca5a0c\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperc753ccca5a0c\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc753ccca5a0c\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperc753ccca5a0c\Psr\Cache\InvalidArgumentException, \_PhpScoperc753ccca5a0c\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperc753ccca5a0c\Psr\Cache\InvalidArgumentException
    {
    }
}
