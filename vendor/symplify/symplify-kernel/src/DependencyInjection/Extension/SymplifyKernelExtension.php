<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScopera34ae19e8d40\Symfony\Component\Config\FileLocator;
use _PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera34ae19e8d40\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
