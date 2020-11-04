<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperfabf55fef6b7\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperfabf55fef6b7\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperfabf55fef6b7\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperfabf55fef6b7\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfabf55fef6b7\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperfabf55fef6b7\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfabf55fef6b7\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperfabf55fef6b7\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperfabf55fef6b7\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperfabf55fef6b7\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperfabf55fef6b7\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfabf55fef6b7\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperfabf55fef6b7\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperfabf55fef6b7\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperfabf55fef6b7\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperfabf55fef6b7\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
