<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\DependencyInjection\Extension;

use _PhpScoperbc5235eb86f3\Symfony\Component\Config\FileLocator;
use _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class PhpConfigPrinterExtension extends \_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperbc5235eb86f3\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
