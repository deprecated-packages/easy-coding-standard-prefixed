<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoper528afa732cbd\Symfony\Component\Config\FileLocator;
use _PhpScoper528afa732cbd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper528afa732cbd\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper528afa732cbd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoper528afa732cbd\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoper528afa732cbd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper528afa732cbd\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper528afa732cbd\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
