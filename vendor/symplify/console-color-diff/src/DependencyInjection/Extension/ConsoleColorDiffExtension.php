<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperf6b7f9bf122d\Symfony\Component\Config\FileLocator;
use _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf6b7f9bf122d\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
