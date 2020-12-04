<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperc233426b15e0\Symfony\Component\Config\FileLocator;
use _PhpScoperc233426b15e0\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc233426b15e0\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc233426b15e0\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperc233426b15e0\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc233426b15e0\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc233426b15e0\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc233426b15e0\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
