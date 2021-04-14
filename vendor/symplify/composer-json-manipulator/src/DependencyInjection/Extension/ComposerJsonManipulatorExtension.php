<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScopere24d949bf310\Symfony\Component\Config\FileLocator;
use _PhpScopere24d949bf310\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere24d949bf310\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopere24d949bf310\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScopere24d949bf310\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScopere24d949bf310\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopere24d949bf310\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopere24d949bf310\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
