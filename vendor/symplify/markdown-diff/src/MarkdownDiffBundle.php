<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScopere341acab57d4\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere341acab57d4\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScopere341acab57d4\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere341acab57d4\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
