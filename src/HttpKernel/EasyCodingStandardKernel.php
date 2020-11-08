<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\HttpKernel;

use _PhpScoperd79d87c3336e\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle;
use _PhpScoperd79d87c3336e\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoperd79d87c3336e\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\CodingStandard\Bundle\SymplifyCodingStandardBundle;
use Symplify\ConsoleColorDiff\ConsoleColorDiffBundle;
use Symplify\EasyCodingStandard\Bundle\EasyCodingStandardBundle;
use Symplify\EasyCodingStandard\DependencyInjection\DelegatingLoaderFactory;
use Symplify\Skipper\Bundle\SkipperBundle;
use Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle;
use Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class EasyCodingStandardKernel extends \Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel
{
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : iterable
    {
        $bundles = [new \Symplify\EasyCodingStandard\Bundle\EasyCodingStandardBundle(), new \Symplify\CodingStandard\Bundle\SymplifyCodingStandardBundle(), new \Symplify\ConsoleColorDiff\ConsoleColorDiffBundle(), new \Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle(), new \Symplify\Skipper\Bundle\SkipperBundle()];
        if ($this->environment === 'test') {
            $bundles[] = new \_PhpScoperd79d87c3336e\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle();
        }
        return $bundles;
    }
    /**
     * @param ContainerInterface|ContainerBuilder $container
     */
    protected function getContainerLoader(\_PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\ContainerInterface $container) : \_PhpScoperd79d87c3336e\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $delegatingLoaderFactory = new \Symplify\EasyCodingStandard\DependencyInjection\DelegatingLoaderFactory();
        return $delegatingLoaderFactory->createFromContainerBuilderAndKernel($container, $this);
    }
}
