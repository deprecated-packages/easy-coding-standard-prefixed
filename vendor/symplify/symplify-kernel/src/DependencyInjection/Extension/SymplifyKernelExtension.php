<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoperbaf90856897c\Symfony\Component\Config\FileLocator;
use _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperbaf90856897c\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
