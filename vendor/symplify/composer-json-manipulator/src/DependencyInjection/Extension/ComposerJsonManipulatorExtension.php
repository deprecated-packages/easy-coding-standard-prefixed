<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperfd70a7e8e84f\Symfony\Component\Config\FileLocator;
use _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfd70a7e8e84f\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
