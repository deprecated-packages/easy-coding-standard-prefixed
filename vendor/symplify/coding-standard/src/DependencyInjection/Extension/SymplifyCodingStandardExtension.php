<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\DependencyInjection\Extension;

use _PhpScoperd32e35cfad84\Symfony\Component\Config\FileLocator;
use _PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyCodingStandardExtension extends \_PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd32e35cfad84\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
