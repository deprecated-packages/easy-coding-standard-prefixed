<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScopercae980ebf12d\Symfony\Component\Config\FileLocator;
use _PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercae980ebf12d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
