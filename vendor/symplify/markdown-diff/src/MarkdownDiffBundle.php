<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoper21fff473f90a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper21fff473f90a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoper21fff473f90a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper21fff473f90a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
