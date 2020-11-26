<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercb217fd4e736\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScopercb217fd4e736\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
