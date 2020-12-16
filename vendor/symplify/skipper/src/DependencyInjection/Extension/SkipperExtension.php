<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScoperb6a8e65b492c\Symfony\Component\Config\FileLocator;
use _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb6a8e65b492c\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
