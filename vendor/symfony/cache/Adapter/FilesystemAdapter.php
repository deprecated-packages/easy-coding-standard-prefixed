<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper880bfa4d8b51\Symfony\Component\Cache\Adapter;

use _PhpScoper880bfa4d8b51\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScoper880bfa4d8b51\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoper880bfa4d8b51\Symfony\Component\Cache\PruneableInterface;
use _PhpScoper880bfa4d8b51\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScoper880bfa4d8b51\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScoper880bfa4d8b51\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScoper880bfa4d8b51\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScoper880bfa4d8b51\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
