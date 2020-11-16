<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
