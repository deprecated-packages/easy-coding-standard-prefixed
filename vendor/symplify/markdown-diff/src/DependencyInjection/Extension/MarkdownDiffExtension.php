<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoperdeea1786e972\Symfony\Component\Config\FileLocator;
use _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperdeea1786e972\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
