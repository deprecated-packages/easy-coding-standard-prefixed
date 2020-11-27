<?php

declare (strict_types=1);
namespace Symplify\RuleDocGenerator\HttpKernel;

use _PhpScoper578a67c80b2b\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoper578a67c80b2b\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\MarkdownDiff\Bundle\MarkdownDiffBundle;
use Symplify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle;
use Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle;
use Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class RuleDocGeneratorKernel extends \Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel
{
    public function registerContainerConfiguration(\_PhpScoper578a67c80b2b\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
    {
        $loader->load(__DIR__ . '/../../config/config.php');
        parent::registerContainerConfiguration($loader);
    }
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : iterable
    {
        return [new \Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle(), new \Symplify\MarkdownDiff\Bundle\MarkdownDiffBundle(), new \Symplify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle()];
    }
}
