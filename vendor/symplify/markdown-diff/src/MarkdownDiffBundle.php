<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfacc742d2745\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperfacc742d2745\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
