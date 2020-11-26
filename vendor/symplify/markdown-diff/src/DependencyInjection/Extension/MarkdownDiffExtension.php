<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoper167729fa1dde\Symfony\Component\Config\FileLocator;
use _PhpScoper167729fa1dde\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper167729fa1dde\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper167729fa1dde\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoper167729fa1dde\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper167729fa1dde\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper167729fa1dde\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper167729fa1dde\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
