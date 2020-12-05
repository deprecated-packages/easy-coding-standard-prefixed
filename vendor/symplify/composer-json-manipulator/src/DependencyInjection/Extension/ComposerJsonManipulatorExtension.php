<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperc83f84c90b60\Symfony\Component\Config\FileLocator;
use _PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc83f84c90b60\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
