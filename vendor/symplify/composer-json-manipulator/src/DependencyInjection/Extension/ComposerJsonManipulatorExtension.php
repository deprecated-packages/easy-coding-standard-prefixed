<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\Config\FileLocator;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperdc8fbcd7c69d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
