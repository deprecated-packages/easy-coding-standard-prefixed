<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperad4605bb9267\Symfony\Component\Config\FileLocator;
use _PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperad4605bb9267\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
