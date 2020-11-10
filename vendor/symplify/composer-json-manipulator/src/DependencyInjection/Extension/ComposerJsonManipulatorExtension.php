<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScopere5e7dca8c031\Symfony\Component\Config\FileLocator;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopere5e7dca8c031\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
