<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercda2b863d098\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScopercda2b863d098\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
