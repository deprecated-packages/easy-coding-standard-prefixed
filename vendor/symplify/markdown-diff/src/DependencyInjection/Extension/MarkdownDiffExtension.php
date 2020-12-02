<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoperfaaf57618f34\Symfony\Component\Config\FileLocator;
use _PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfaaf57618f34\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
