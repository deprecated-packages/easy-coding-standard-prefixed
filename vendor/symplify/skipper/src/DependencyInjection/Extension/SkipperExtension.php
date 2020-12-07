<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScoperda2604e33acb\Symfony\Component\Config\FileLocator;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperda2604e33acb\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
