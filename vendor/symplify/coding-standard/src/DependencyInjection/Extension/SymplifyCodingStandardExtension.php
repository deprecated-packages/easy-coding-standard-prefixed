<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\DependencyInjection\Extension;

use _PhpScoperd9fcac9e904f\Symfony\Component\Config\FileLocator;
use _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyCodingStandardExtension extends \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd9fcac9e904f\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
