<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\DependencyInjection\Extension;

use _PhpScoperf361a7d70552\Symfony\Component\Config\FileLocator;
use _PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class PhpConfigPrinterExtension extends \_PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf361a7d70552\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
