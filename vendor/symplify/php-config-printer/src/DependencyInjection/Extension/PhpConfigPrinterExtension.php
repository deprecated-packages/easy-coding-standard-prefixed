<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\DependencyInjection\Extension;

use _PhpScoperb26833cc184d\Symfony\Component\Config\FileLocator;
use _PhpScoperb26833cc184d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb26833cc184d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb26833cc184d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class PhpConfigPrinterExtension extends \_PhpScoperb26833cc184d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperb26833cc184d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperb26833cc184d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb26833cc184d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
