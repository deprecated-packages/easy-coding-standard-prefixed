<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter;

use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\PruneableInterface;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
