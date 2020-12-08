<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScoperf053e888b664\Symfony\Component\Config\FileLocator;
use _PhpScoperf053e888b664\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf053e888b664\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperf053e888b664\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScoperf053e888b664\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperf053e888b664\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperf053e888b664\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperf053e888b664\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
