<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScoperd301db66c80c\Symfony\Component\Config\FileLocator;
use _PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd301db66c80c\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
