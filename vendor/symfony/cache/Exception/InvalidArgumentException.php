<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Exception;

use _PhpScopercd2fc5ef50ef\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScopercd2fc5ef50ef\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScopercd2fc5ef50ef\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopercd2fc5ef50ef\Psr\Cache\InvalidArgumentException, \_PhpScopercd2fc5ef50ef\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScopercd2fc5ef50ef\Psr\Cache\InvalidArgumentException
    {
    }
}
