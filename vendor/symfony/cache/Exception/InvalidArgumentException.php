<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperef870243cfdb\Symfony\Component\Cache\Exception;

use _PhpScoperef870243cfdb\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperef870243cfdb\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperef870243cfdb\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperef870243cfdb\Psr\Cache\InvalidArgumentException, \_PhpScoperef870243cfdb\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperef870243cfdb\Psr\Cache\InvalidArgumentException
    {
    }
}
