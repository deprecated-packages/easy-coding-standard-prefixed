<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\HttpKernel;

use _PhpScoper1c0f546920a5\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoper1c0f546920a5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper1c0f546920a5\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoper1c0f546920a5\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\CodingStandard\Bundle\SymplifyCodingStandardBundle;
use Symplify\ConsoleColorDiff\Bundle\ConsoleColorDiffBundle;
use Symplify\EasyCodingStandard\Bundle\EasyCodingStandardBundle;
use Symplify\EasyCodingStandard\DependencyInjection\DelegatingLoaderFactory;
use Symplify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle;
use Symplify\Skipper\Bundle\SkipperBundle;
use Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle;
use Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class EasyCodingStandardKernel extends AbstractSymplifyKernel
{
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : iterable
    {
        $bundles = [new EasyCodingStandardBundle(), new SymplifyCodingStandardBundle(), new ConsoleColorDiffBundle(), new SymplifyKernelBundle(), new SkipperBundle()];
        if ($this->environment === 'test') {
            $bundles[] = new PhpConfigPrinterBundle();
        }
        return $bundles;
    }
    /**
     * @param ContainerInterface|ContainerBuilder $container
     */
    protected function getContainerLoader(ContainerInterface $container) : DelegatingLoader
    {
        $delegatingLoaderFactory = new DelegatingLoaderFactory();
        return $delegatingLoaderFactory->createFromContainerBuilderAndKernel($container, $this);
    }
}
