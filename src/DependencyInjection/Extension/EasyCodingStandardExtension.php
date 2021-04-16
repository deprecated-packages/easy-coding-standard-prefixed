<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\Extension;

use _PhpScoper1ddca3f92d7d\Symfony\Component\Config\FileLocator;
use _PhpScoper1ddca3f92d7d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper1ddca3f92d7d\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper1ddca3f92d7d\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class EasyCodingStandardExtension extends Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new PhpFileLoader($containerBuilder, new FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
