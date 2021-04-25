<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\DependencyInjection\Extension;

use _PhpScoper4fedb9aa1e5f\Symfony\Component\Config\FileLocator;
use _PhpScoper4fedb9aa1e5f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper4fedb9aa1e5f\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper4fedb9aa1e5f\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyCodingStandardExtension extends Extension
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
