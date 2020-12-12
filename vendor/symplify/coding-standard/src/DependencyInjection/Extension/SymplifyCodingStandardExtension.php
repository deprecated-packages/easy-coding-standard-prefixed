<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\DependencyInjection\Extension;

use _PhpScoper8a05d21c15c9\Symfony\Component\Config\FileLocator;
use _PhpScoper8a05d21c15c9\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper8a05d21c15c9\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper8a05d21c15c9\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyCodingStandardExtension extends \_PhpScoper8a05d21c15c9\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper8a05d21c15c9\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper8a05d21c15c9\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper8a05d21c15c9\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
