<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoper246439c06ab2\Symfony\Component\Config\FileLocator;
use _PhpScoper246439c06ab2\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper246439c06ab2\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper246439c06ab2\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoper246439c06ab2\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoper246439c06ab2\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper246439c06ab2\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper246439c06ab2\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
