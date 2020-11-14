<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercda2b863d098\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScopercda2b863d098\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
