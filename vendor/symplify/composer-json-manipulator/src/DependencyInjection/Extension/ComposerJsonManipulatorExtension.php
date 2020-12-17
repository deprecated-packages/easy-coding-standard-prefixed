<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperfa7254c25e18\Symfony\Component\Config\FileLocator;
use _PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfa7254c25e18\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
