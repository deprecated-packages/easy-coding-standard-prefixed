<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScopera88a8b9f064a\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScopera88a8b9f064a\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScopera88a8b9f064a\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScopera88a8b9f064a\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera88a8b9f064a\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScopera88a8b9f064a\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopera88a8b9f064a\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScopera88a8b9f064a\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScopera88a8b9f064a\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScopera88a8b9f064a\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScopera88a8b9f064a\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopera88a8b9f064a\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScopera88a8b9f064a\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScopera88a8b9f064a\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScopera88a8b9f064a\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScopera88a8b9f064a\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
