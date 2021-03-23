<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperc7096eb2567d\Symfony\Component\Config\FileLocator;
use _PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc7096eb2567d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
