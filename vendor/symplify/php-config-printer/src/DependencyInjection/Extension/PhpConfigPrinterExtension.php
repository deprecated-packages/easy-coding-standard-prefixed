<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\DependencyInjection\Extension;

use _PhpScopera1a51450b61d\Symfony\Component\Config\FileLocator;
use _PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class PhpConfigPrinterExtension extends \_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera1a51450b61d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
