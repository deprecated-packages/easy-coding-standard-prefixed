<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScopera8f555a7493c\Symfony\Component\Config\FileLocator;
use _PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera8f555a7493c\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
