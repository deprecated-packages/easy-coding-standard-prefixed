<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScoperc95ae4bf942a\Symfony\Component\Config\FileLocator;
use _PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc95ae4bf942a\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
