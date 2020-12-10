<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoperf7b66f9e3817\Symfony\Component\Config\FileLocator;
use _PhpScoperf7b66f9e3817\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf7b66f9e3817\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf7b66f9e3817\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoperf7b66f9e3817\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperf7b66f9e3817\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperf7b66f9e3817\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf7b66f9e3817\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
