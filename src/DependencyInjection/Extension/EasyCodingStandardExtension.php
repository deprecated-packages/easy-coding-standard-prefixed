<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoper23ef26a4fb01\Symfony\Component\Config\FileLocator;
use _PhpScoper23ef26a4fb01\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper23ef26a4fb01\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper23ef26a4fb01\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoper23ef26a4fb01\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper23ef26a4fb01\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper23ef26a4fb01\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper23ef26a4fb01\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
