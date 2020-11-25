<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperaa402dd1b1f1\Symfony\Component\Config\FileLocator;
use _PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperaa402dd1b1f1\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
