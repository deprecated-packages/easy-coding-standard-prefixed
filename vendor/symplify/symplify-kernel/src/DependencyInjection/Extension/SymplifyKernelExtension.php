<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoper82aa0193482e\Symfony\Component\Config\FileLocator;
use _PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper82aa0193482e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper82aa0193482e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
