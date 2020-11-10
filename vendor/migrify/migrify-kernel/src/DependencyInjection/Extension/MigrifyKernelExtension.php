<?php

declare (strict_types=1);
namespace _PhpScoper666af036e800\Migrify\MigrifyKernel\DependencyInjection\Extension;

use _PhpScoper666af036e800\Symfony\Component\Config\FileLocator;
use _PhpScoper666af036e800\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper666af036e800\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper666af036e800\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MigrifyKernelExtension extends \_PhpScoper666af036e800\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper666af036e800\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper666af036e800\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper666af036e800\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
