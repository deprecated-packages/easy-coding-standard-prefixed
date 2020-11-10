<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScopere5e7dca8c031\Symfony\Component\Config\FileLocator;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopere5e7dca8c031\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
