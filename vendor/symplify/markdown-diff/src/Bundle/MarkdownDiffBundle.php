<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\Bundle;

use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
