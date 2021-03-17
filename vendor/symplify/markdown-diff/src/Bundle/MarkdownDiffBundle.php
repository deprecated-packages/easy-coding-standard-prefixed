<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\Bundle;

use _PhpScoper4e2df00556a9\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoper4e2df00556a9\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
