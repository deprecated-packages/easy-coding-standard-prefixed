<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoperfb2c402b972b\Symfony\Component\Config\FileLocator;
use _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfb2c402b972b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
