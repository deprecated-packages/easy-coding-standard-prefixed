<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Exception;

use _PhpScoperfd70a7e8e84f\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperfd70a7e8e84f\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperfd70a7e8e84f\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperfd70a7e8e84f\Psr\Cache\InvalidArgumentException, \_PhpScoperfd70a7e8e84f\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperfd70a7e8e84f\Psr\Cache\InvalidArgumentException
    {
    }
}
