<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\DependencyInjection\Extension;

use _PhpScopercd2fc5ef50ef\Symfony\Component\Config\FileLocator;
use _PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyCodingStandardExtension extends \_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercd2fc5ef50ef\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
