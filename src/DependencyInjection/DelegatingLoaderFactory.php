<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScopera1a51450b61d\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScopera1a51450b61d\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScopera1a51450b61d\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScopera1a51450b61d\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera1a51450b61d\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScopera1a51450b61d\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopera1a51450b61d\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScopera1a51450b61d\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScopera1a51450b61d\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScopera1a51450b61d\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScopera1a51450b61d\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopera1a51450b61d\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScopera1a51450b61d\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScopera1a51450b61d\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScopera1a51450b61d\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScopera1a51450b61d\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
