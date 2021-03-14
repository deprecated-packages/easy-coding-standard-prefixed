<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScopera1f11cc38772\Symfony\Component\Config\FileLocator;
use _PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera1f11cc38772\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
