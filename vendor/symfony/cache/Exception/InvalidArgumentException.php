<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb36402634947\Symfony\Component\Cache\Exception;

use _PhpScoperb36402634947\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperb36402634947\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperb36402634947\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperb36402634947\Psr\Cache\InvalidArgumentException, \_PhpScoperb36402634947\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperb36402634947\Psr\Cache\InvalidArgumentException
    {
    }
}
