<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoper842c7347e6be\Symfony\Component\Config\FileLocator;
use _PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper842c7347e6be\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper842c7347e6be\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
