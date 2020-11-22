<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScoper4cd05b62e9f1\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper4cd05b62e9f1\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScoper4cd05b62e9f1\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper4cd05b62e9f1\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
