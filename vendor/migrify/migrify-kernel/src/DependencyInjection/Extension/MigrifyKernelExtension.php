<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\DependencyInjection\Extension;

use _PhpScoperad4b7e2c09d8\Symfony\Component\Config\FileLocator;
use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MigrifyKernelExtension extends \_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperad4b7e2c09d8\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
