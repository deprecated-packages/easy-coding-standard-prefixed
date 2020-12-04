<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScopera4fc793dae73\Symfony\Component\Config\FileLocator;
use _PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera4fc793dae73\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
