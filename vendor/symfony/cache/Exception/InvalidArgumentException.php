<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf523baae4f87\Symfony\Component\Cache\Exception;

use _PhpScoperf523baae4f87\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperf523baae4f87\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperf523baae4f87\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperf523baae4f87\Psr\Cache\InvalidArgumentException, \_PhpScoperf523baae4f87\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperf523baae4f87\Psr\Cache\InvalidArgumentException
    {
    }
}
