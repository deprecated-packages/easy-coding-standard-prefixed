<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoperc7096eb2567d\Symfony\Component\Config\FileLocator;
use _PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc7096eb2567d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
