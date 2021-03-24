<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScopere66f4b626446\Symfony\Component\Config\FileLocator;
use _PhpScopere66f4b626446\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere66f4b626446\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopere66f4b626446\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScopere66f4b626446\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScopere66f4b626446\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopere66f4b626446\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopere66f4b626446\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
