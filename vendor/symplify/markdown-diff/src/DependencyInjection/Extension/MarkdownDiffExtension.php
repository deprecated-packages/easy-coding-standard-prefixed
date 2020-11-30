<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\DependencyInjection\Extension;

use _PhpScopera09818bc50da\Symfony\Component\Config\FileLocator;
use _PhpScopera09818bc50da\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera09818bc50da\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera09818bc50da\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class MarkdownDiffExtension extends \_PhpScopera09818bc50da\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopera09818bc50da\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopera09818bc50da\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera09818bc50da\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
