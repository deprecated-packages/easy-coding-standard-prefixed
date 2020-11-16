<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperbcc0395698f8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperbcc0395698f8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
