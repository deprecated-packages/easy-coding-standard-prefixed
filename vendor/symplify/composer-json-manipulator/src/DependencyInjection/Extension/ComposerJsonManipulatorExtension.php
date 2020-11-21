<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScopera4be459e5e3d\Symfony\Component\Config\FileLocator;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera4be459e5e3d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
