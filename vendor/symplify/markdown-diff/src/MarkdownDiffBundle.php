<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper49c742f5a4ee\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoper49c742f5a4ee\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
