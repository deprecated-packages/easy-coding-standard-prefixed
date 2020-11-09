<?php

declare (strict_types=1);
namespace Symplify\RuleDocGenerator\HttpKernel;

use _PhpScopere015d8a3273c\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScopere015d8a3273c\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\ConsoleColorDiff\ConsoleColorDiffBundle;
use Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle;
use Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class RuleDocGeneratorKernel extends \Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel
{
    public function registerContainerConfiguration(\_PhpScopere015d8a3273c\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
    {
        $loader->load(__DIR__ . '/../../config/config.php');
    }
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : iterable
    {
        return [new \Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle(), new \Symplify\ConsoleColorDiff\ConsoleColorDiffBundle()];
    }
}
