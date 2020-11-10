<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoper666af036e800\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper666af036e800\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoper666af036e800\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper666af036e800\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
