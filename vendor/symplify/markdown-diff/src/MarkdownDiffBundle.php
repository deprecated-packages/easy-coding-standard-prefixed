<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera749ac204cd2\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScopera749ac204cd2\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
