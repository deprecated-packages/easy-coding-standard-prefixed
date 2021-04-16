<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScopera22bb3f4d7b7\Symfony\Component\Config\FileLocator;
use _PhpScopera22bb3f4d7b7\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera22bb3f4d7b7\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera22bb3f4d7b7\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new PhpFileLoader($containerBuilder, new FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
