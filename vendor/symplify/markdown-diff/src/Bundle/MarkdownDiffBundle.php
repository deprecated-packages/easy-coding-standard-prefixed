<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\Bundle;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
