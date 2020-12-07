<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\Extension;

use _PhpScopereb8678af2407\Symfony\Component\Config\FileLocator;
use _PhpScopereb8678af2407\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class SymplifyKernelExtension extends \_PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopereb8678af2407\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScopereb8678af2407\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopereb8678af2407\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('common-config.php');
    }
}
