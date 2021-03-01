<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\Bundle;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
