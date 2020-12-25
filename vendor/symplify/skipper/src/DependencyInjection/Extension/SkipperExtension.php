<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScoper92597f5b42a7\Symfony\Component\Config\FileLocator;
use _PhpScoper92597f5b42a7\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper92597f5b42a7\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper92597f5b42a7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScoper92597f5b42a7\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper92597f5b42a7\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper92597f5b42a7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper92597f5b42a7\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
