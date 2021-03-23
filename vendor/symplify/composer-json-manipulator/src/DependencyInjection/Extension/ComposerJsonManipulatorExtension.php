<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoper70d1796231ae\Symfony\Component\Config\FileLocator;
use _PhpScoper70d1796231ae\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper70d1796231ae\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper70d1796231ae\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoper70d1796231ae\Symfony\Component\DependencyInjection\Extension\Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, \_PhpScoper70d1796231ae\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoper70d1796231ae\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoper70d1796231ae\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
