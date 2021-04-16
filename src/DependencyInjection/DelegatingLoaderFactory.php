<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoper1ddca3f92d7d\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoper1ddca3f92d7d\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoper1ddca3f92d7d\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoper1ddca3f92d7d\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoper1ddca3f92d7d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper1ddca3f92d7d\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoper1ddca3f92d7d\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(ContainerBuilder $containerBuilder, KernelInterface $kernel) : DelegatingLoader
    {
        $kernelFileLocator = new FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(ContainerBuilder $containerBuilder, string $config) : DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new SimpleFileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(ContainerBuilder $containerBuilder, SimpleFileLocator $simpleFileLocator) : DelegatingLoader
    {
        $loaders = [new GlobFileLoader($simpleFileLocator), new ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new LoaderResolver($loaders);
        return new DelegatingLoader($loaderResolver);
    }
}
