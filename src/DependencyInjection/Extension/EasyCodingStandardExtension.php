<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoperddde3ba4aebc\Symfony\Component\Config\FileLocator;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperddde3ba4aebc\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
