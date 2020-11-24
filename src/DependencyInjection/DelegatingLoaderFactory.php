<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperfd70a7e8e84f\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfd70a7e8e84f\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperfd70a7e8e84f\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfd70a7e8e84f\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperfd70a7e8e84f\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperfd70a7e8e84f\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperfd70a7e8e84f\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperfd70a7e8e84f\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfd70a7e8e84f\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperfd70a7e8e84f\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperfd70a7e8e84f\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperfd70a7e8e84f\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperfd70a7e8e84f\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
