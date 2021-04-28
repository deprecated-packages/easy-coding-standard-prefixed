<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoper1b2f8b9c0339\Symfony\Component\Config\FileLocator;
use _PhpScoper1b2f8b9c0339\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper1b2f8b9c0339\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper1b2f8b9c0339\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends Extension
{
    /**
     * @param string[] $configs
     */
    public function load(array $configs, ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new PhpFileLoader($containerBuilder, new FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
