<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
