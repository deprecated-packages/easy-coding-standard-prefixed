<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperbaf90856897c\Symfony\Component\Config\FileLocator;
use _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperbaf90856897c\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
