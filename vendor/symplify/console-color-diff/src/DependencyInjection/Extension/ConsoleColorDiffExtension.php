<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\DependencyInjection\Extension;

use _PhpScoperd47a2fa2a77e\Symfony\Component\Config\FileLocator;
use _PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ConsoleColorDiffExtension extends \_PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd47a2fa2a77e\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
