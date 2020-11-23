<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperd4c5032f0671\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperd4c5032f0671\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
