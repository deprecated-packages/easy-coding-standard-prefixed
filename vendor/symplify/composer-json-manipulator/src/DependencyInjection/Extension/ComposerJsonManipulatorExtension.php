<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScopercb217fd4e736\Symfony\Component\Config\FileLocator;
use _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercb217fd4e736\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
