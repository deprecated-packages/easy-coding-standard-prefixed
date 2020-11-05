<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperdebd9d705540\Symfony\Component\Config\FileLocator;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperdebd9d705540\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
