<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\DependencyInjection\Extension;

use _PhpScoperd4c5032f0671\Symfony\Component\Config\FileLocator;
use _PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class PhpConfigPrinterExtension extends \_PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd4c5032f0671\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
