<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScopera909b9d9be2e\Symfony\Component\Config\FileLocator;
use _PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera909b9d9be2e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
