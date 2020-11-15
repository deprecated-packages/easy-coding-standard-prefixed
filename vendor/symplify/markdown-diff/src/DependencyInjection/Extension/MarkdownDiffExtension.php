<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScopercb576ca159b5\Symfony\Component\Config\FileLocator;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercb576ca159b5\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
