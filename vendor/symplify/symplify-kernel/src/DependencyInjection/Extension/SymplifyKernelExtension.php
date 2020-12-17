<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScopercf909b66eba8\Symfony\Component\Config\FileLocator;
use _PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopercf909b66eba8\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercf909b66eba8\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
