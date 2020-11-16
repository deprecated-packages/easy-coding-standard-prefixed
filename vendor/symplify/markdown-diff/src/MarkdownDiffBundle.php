<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperad4605bb9267\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperad4605bb9267\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
