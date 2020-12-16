<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScoperd35c27cd4b09\Symfony\Component\Config\FileLocator;
use _PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd35c27cd4b09\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
