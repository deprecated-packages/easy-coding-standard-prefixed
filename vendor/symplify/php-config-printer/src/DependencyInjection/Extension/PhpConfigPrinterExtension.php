<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\DependencyInjection\Extension;

use _PhpScopera37d6fb0b1ab\Symfony\Component\Config\FileLocator;
use _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class PhpConfigPrinterExtension extends \_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera37d6fb0b1ab\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
