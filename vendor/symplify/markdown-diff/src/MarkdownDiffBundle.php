<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper1103e00fb46b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoper1103e00fb46b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
