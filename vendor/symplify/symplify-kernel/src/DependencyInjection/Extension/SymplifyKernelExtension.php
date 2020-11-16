<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperbcc0395698f8\Symfony\Component\Config\FileLocator;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperbcc0395698f8\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
