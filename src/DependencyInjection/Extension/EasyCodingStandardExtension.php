<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoperfabf55fef6b7\Symfony\Component\Config\FileLocator;
use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfabf55fef6b7\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
