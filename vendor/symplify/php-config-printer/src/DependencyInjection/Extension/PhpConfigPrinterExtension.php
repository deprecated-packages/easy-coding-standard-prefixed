<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\DependencyInjection\Extension;

use _PhpScoperf3dc21757def\Symfony\Component\Config\FileLocator;
use _PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class PhpConfigPrinterExtension extends \_PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf3dc21757def\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
