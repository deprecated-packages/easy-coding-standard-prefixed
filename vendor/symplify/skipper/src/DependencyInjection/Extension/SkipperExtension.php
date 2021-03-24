<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScoperc98ae2003489\Symfony\Component\Config\FileLocator;
use _PhpScoperc98ae2003489\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc98ae2003489\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperc98ae2003489\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScoperc98ae2003489\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoperc98ae2003489\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScoperc98ae2003489\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperc98ae2003489\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
