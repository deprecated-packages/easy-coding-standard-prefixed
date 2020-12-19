<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoperd1a5bf00e83e\Symfony\Component\Config\FileLocator;
use _PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd1a5bf00e83e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
