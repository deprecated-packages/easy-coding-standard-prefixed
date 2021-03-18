<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf53473b45c36\Symfony\Component\Cache\Adapter;

use _PhpScoperf53473b45c36\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScoperf53473b45c36\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperf53473b45c36\Symfony\Component\Cache\PruneableInterface;
use _PhpScoperf53473b45c36\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScoperf53473b45c36\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScoperf53473b45c36\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScoperf53473b45c36\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScoperf53473b45c36\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
