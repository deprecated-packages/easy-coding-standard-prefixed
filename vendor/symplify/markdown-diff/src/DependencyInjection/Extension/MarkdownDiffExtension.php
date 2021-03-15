<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoper8a7636b3fdaf\Symfony\Component\Config\FileLocator;
use _PhpScoper8a7636b3fdaf\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper8a7636b3fdaf\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper8a7636b3fdaf\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoper8a7636b3fdaf\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoper8a7636b3fdaf\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper8a7636b3fdaf\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper8a7636b3fdaf\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
