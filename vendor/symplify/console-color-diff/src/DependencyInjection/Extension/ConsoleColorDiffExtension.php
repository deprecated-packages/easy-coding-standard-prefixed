<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperdaf95aff095b\Symfony\Component\Config\FileLocator;
use _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperdaf95aff095b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
