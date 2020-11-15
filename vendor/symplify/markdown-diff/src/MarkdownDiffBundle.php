<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercb576ca159b5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScopercb576ca159b5\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
