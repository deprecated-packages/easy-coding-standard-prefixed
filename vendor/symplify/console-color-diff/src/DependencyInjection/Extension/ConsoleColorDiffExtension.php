<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperedc2e0c967db\Symfony\Component\Config\FileLocator;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperedc2e0c967db\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
