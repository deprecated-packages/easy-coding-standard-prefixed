<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\Migrify\MigrifyKernel\DependencyInjection\Extension;

use _PhpScoper229e8121cf9f\Symfony\Component\Config\FileLocator;
use _PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MigrifyKernelExtension extends \_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper229e8121cf9f\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
