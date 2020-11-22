<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera88a8b9f064a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScopera88a8b9f064a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
