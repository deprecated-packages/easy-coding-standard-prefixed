<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba24099fc6fd\Symfony\Component\Cache\Exception;

use _PhpScoperba24099fc6fd\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperba24099fc6fd\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperba24099fc6fd\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperba24099fc6fd\Psr\Cache\InvalidArgumentException, \_PhpScoperba24099fc6fd\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperba24099fc6fd\Psr\Cache\InvalidArgumentException
    {
    }
}
