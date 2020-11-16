<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\Migrify\MigrifyKernel\DependencyInjection\Extension;

use _PhpScoper1103e00fb46b\Symfony\Component\Config\FileLocator;
use _PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MigrifyKernelExtension extends \_PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper1103e00fb46b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
