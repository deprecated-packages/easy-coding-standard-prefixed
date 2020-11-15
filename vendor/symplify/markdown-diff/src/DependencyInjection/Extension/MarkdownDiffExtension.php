<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoper64a921a5401b\Symfony\Component\Config\FileLocator;
use _PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper64a921a5401b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
