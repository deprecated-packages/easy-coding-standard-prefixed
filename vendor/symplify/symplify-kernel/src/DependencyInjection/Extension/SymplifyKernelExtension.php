<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScoper7e6a1331d94a\Symfony\Component\Config\FileLocator;
use _PhpScoper7e6a1331d94a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper7e6a1331d94a\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper7e6a1331d94a\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new PhpFileLoader($containerBuilder, new FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
