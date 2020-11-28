<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperfcce67077a55\Symfony\Component\Config\FileLocator;
use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperfcce67077a55\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
