<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoper56c9df53a081\Symfony\Component\Config\FileLocator;
use _PhpScoper56c9df53a081\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper56c9df53a081\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper56c9df53a081\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoper56c9df53a081\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper56c9df53a081\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper56c9df53a081\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper56c9df53a081\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
