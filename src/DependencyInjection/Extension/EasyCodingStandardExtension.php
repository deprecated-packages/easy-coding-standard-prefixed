<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoper64ca614e27fd\Symfony\Component\Config\FileLocator;
use _PhpScoper64ca614e27fd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper64ca614e27fd\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper64ca614e27fd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoper64ca614e27fd\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper64ca614e27fd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper64ca614e27fd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper64ca614e27fd\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
