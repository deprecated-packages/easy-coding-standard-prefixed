<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoperd675aaf00c76\Symfony\Component\Config\FileLocator;
use _PhpScoperd675aaf00c76\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd675aaf00c76\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd675aaf00c76\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoperd675aaf00c76\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd675aaf00c76\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperd675aaf00c76\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd675aaf00c76\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
