<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScopercb576ca159b5\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScopercb576ca159b5\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScopercb576ca159b5\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScopercb576ca159b5\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercb576ca159b5\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScopercb576ca159b5\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopercb576ca159b5\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScopercb576ca159b5\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScopercb576ca159b5\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScopercb576ca159b5\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScopercb576ca159b5\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopercb576ca159b5\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScopercb576ca159b5\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScopercb576ca159b5\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScopercb576ca159b5\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScopercb576ca159b5\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
