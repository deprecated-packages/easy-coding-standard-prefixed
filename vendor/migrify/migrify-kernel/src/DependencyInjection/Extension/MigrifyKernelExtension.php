<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\Migrify\MigrifyKernel\DependencyInjection\Extension;

use _PhpScopera749ac204cd2\Symfony\Component\Config\FileLocator;
use _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MigrifyKernelExtension extends \_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera749ac204cd2\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
