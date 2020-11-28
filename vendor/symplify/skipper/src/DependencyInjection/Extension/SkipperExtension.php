<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScoperfcce67077a55\Symfony\Component\Config\FileLocator;
use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfcce67077a55\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
