<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoperd8b12759ee0d\Symfony\Component\Config\FileLocator;
use _PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd8b12759ee0d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
