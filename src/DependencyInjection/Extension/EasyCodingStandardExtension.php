<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoperb2e2c0c42e71\Symfony\Component\Config\FileLocator;
use _PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb2e2c0c42e71\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
