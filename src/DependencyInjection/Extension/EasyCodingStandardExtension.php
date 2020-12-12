<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoper79449c4e744b\Symfony\Component\Config\FileLocator;
use _PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper79449c4e744b\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
