<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb383f16e851e\Symfony\Component\Cache\Adapter;

use _PhpScoperb383f16e851e\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScoperb383f16e851e\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperb383f16e851e\Symfony\Component\Cache\PruneableInterface;
use _PhpScoperb383f16e851e\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScoperb383f16e851e\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScoperb383f16e851e\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScoperb383f16e851e\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScoperb383f16e851e\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
