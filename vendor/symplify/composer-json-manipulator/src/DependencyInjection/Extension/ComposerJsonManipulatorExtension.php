<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperd35c27cd4b09\Symfony\Component\Config\FileLocator;
use _PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd35c27cd4b09\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
