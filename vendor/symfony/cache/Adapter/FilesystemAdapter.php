<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter;

use _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\PruneableInterface;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScopercd2fc5ef50ef\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
