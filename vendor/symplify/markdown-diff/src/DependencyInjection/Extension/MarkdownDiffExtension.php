<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoperaba240c3d5f1\Symfony\Component\Config\FileLocator;
use _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperaba240c3d5f1\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
