<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperfabf55fef6b7\Symfony\Component\Config\FileLocator;
use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfabf55fef6b7\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
