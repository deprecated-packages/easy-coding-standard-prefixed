<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScopercf327c47dfc5\Symfony\Component\Config\FileLocator;
use _PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercf327c47dfc5\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
