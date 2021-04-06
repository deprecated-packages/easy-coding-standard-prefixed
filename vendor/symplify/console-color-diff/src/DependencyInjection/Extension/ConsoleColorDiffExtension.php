<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperb6361033cf41\Symfony\Component\Config\FileLocator;
use _PhpScoperb6361033cf41\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb6361033cf41\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb6361033cf41\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperb6361033cf41\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoperb6361033cf41\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperb6361033cf41\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb6361033cf41\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
