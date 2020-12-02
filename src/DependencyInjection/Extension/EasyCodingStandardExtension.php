<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScopera23ebff5477f\Symfony\Component\Config\FileLocator;
use _PhpScopera23ebff5477f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera23ebff5477f\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera23ebff5477f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScopera23ebff5477f\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera23ebff5477f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopera23ebff5477f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera23ebff5477f\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
