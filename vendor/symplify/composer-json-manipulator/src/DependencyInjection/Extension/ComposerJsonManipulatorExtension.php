<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperb0c6500a504c\Symfony\Component\Config\FileLocator;
use _PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb0c6500a504c\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
