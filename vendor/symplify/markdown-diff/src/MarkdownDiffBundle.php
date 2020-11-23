<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc4b135661b3a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperc4b135661b3a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
