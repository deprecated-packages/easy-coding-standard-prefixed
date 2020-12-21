<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperfcf15c26e033\Symfony\Component\Config\FileLocator;
use _PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfcf15c26e033\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
