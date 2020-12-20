<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\DependencyInjection\Extension;

use _PhpScoperba24099fc6fd\Symfony\Component\Config\FileLocator;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyCodingStandardExtension extends \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperba24099fc6fd\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
