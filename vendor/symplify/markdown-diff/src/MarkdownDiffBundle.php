<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera88a8b9f064a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScopera88a8b9f064a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
