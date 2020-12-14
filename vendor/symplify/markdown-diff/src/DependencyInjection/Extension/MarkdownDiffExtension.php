<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoperc64a4ac1af35\Symfony\Component\Config\FileLocator;
use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc64a4ac1af35\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
