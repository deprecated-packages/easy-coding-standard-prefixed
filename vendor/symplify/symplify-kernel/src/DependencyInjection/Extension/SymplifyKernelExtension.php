<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperaad82bb90a86\Symfony\Component\Config\FileLocator;
use _PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperaad82bb90a86\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
