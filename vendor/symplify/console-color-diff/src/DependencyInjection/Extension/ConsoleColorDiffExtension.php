<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScopera51a90153f58\Symfony\Component\Config\FileLocator;
use _PhpScopera51a90153f58\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera51a90153f58\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera51a90153f58\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
