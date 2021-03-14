<?php

declare (strict_types=1);
namespace Symplify\Skipper\DependencyInjection\Extension;

use _PhpScopera1f11cc38772\Symfony\Component\Config\FileLocator;
use _PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SkipperExtension extends \_PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopera1f11cc38772\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopera1f11cc38772\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
