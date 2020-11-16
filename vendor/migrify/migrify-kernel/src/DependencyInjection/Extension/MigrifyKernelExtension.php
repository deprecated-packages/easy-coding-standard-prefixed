<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\Migrify\MigrifyKernel\DependencyInjection\Extension;

use _PhpScoper8e2d8a2760d1\Symfony\Component\Config\FileLocator;
use _PhpScoper8e2d8a2760d1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper8e2d8a2760d1\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper8e2d8a2760d1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MigrifyKernelExtension extends \_PhpScoper8e2d8a2760d1\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper8e2d8a2760d1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper8e2d8a2760d1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper8e2d8a2760d1\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
