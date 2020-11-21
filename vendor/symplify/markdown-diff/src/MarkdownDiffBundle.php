<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera4be459e5e3d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScopera4be459e5e3d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
