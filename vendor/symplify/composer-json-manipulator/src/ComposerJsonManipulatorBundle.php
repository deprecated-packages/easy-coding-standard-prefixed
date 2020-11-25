<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
