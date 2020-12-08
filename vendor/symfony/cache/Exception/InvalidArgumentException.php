<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf3f1be0d8a30\Symfony\Component\Cache\Exception;

use _PhpScoperf3f1be0d8a30\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperf3f1be0d8a30\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperf3f1be0d8a30\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperf3f1be0d8a30\Psr\Cache\InvalidArgumentException, \_PhpScoperf3f1be0d8a30\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperf3f1be0d8a30\Psr\Cache\InvalidArgumentException
    {
    }
}
