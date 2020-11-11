<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScoper06c66bea2cf6\Symfony\Component\Config\FileLocator;
use _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper06c66bea2cf6\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
