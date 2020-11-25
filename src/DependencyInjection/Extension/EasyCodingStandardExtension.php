<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoperaac5f7c652e4\Symfony\Component\Config\FileLocator;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperaac5f7c652e4\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
