<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoper745103eaabcd\Symfony\Component\Config\FileLocator;
use _PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper745103eaabcd\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
