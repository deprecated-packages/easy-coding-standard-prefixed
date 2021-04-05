<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScoperf5c57eca8aae\Symfony\Component\Config\FileLocator;
use _PhpScoperf5c57eca8aae\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf5c57eca8aae\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf5c57eca8aae\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScoperf5c57eca8aae\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoperf5c57eca8aae\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperf5c57eca8aae\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf5c57eca8aae\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
