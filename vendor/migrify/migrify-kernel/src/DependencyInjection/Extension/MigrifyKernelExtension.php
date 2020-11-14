<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\MigrifyKernel\DependencyInjection\Extension;

use _PhpScoperb09c3ec8e01a\Symfony\Component\Config\FileLocator;
use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MigrifyKernelExtension extends \_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb09c3ec8e01a\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
