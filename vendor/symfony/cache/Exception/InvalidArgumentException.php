<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperddde3ba4aebc\Symfony\Component\Cache\Exception;

use _PhpScoperddde3ba4aebc\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperddde3ba4aebc\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperddde3ba4aebc\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperddde3ba4aebc\Psr\Cache\InvalidArgumentException, \_PhpScoperddde3ba4aebc\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperddde3ba4aebc\Psr\Cache\InvalidArgumentException
    {
    }
}
