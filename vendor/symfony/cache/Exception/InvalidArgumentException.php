<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Exception;

use _PhpScoperaac5f7c652e4\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperaac5f7c652e4\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperaac5f7c652e4\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperaac5f7c652e4\Psr\Cache\InvalidArgumentException, \_PhpScoperaac5f7c652e4\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperaac5f7c652e4\Psr\Cache\InvalidArgumentException
    {
    }
}
