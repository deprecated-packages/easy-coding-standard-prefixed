<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScopera909b9d9be2e\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScopera909b9d9be2e\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScopera909b9d9be2e\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScopera909b9d9be2e\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera909b9d9be2e\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScopera909b9d9be2e\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopera909b9d9be2e\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScopera909b9d9be2e\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScopera909b9d9be2e\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScopera909b9d9be2e\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScopera909b9d9be2e\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopera909b9d9be2e\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScopera909b9d9be2e\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScopera909b9d9be2e\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScopera909b9d9be2e\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScopera909b9d9be2e\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
