<?php

declare (strict_types=1);
namespace Symplify\RuleDocGenerator\HttpKernel;

use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle;
use _PhpScoperfacc742d2745\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoperfacc742d2745\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\MarkdownDiff\MarkdownDiffBundle;
use Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle;
use Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class RuleDocGeneratorKernel extends \Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel
{
    public function registerContainerConfiguration(\_PhpScoperfacc742d2745\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
    {
        $loader->load(__DIR__ . '/../../config/config.php');
    }
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : iterable
    {
        return [new \Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle(), new \Symplify\MarkdownDiff\MarkdownDiffBundle(), new \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle()];
    }
}
