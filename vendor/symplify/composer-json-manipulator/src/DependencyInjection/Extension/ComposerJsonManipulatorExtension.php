<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperca8ca183ac38\Symfony\Component\Config\FileLocator;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperca8ca183ac38\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
