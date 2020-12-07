<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperda2604e33acb\Symfony\Component\Cache\Exception;

use _PhpScoperda2604e33acb\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperda2604e33acb\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperda2604e33acb\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperda2604e33acb\Psr\Cache\InvalidArgumentException, \_PhpScoperda2604e33acb\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperda2604e33acb\Psr\Cache\InvalidArgumentException
    {
    }
}
