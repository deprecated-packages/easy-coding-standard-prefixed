<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\DependencyInjection\Extension;

use _PhpScoper065e4ba46e6d\Symfony\Component\Config\FileLocator;
use _PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyCodingStandardExtension extends \_PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper065e4ba46e6d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
