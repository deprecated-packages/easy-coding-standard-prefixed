<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoperaac5f7c652e4\Symfony\Component\Config\FileLocator;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperaac5f7c652e4\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
