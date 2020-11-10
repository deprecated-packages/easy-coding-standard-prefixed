<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
