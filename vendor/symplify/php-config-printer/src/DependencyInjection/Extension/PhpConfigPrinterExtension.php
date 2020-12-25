<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\DependencyInjection\Extension;

use _PhpScoper9e3283ae8193\Symfony\Component\Config\FileLocator;
use _PhpScoper9e3283ae8193\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper9e3283ae8193\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper9e3283ae8193\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class PhpConfigPrinterExtension extends \_PhpScoper9e3283ae8193\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper9e3283ae8193\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper9e3283ae8193\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper9e3283ae8193\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
