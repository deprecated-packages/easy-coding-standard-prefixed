<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperd79d87c3336e\Symfony\Component\Config\FileLocator;
use _PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd79d87c3336e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
