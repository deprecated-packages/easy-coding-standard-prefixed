<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoperb73f9e44f4eb\Symfony\Component\Config\FileLocator;
use _PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperb73f9e44f4eb\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
