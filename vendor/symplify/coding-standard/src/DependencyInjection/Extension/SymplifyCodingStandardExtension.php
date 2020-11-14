<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\DependencyInjection\Extension;

use _PhpScoperecb978830f1e\Symfony\Component\Config\FileLocator;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyCodingStandardExtension extends \_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperecb978830f1e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
