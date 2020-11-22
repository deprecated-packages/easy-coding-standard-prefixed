<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScopera88a8b9f064a\Symfony\Component\Config\FileLocator;
use _PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera88a8b9f064a\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
