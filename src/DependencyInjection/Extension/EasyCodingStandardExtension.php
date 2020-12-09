<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoperdf15f2b748e9\Symfony\Component\Config\FileLocator;
use _PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperdf15f2b748e9\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
