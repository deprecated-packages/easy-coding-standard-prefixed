<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScopercae980ebf12d\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScopercae980ebf12d\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScopercae980ebf12d\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScopercae980ebf12d\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercae980ebf12d\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScopercae980ebf12d\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopercae980ebf12d\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScopercae980ebf12d\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScopercae980ebf12d\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScopercae980ebf12d\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScopercae980ebf12d\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopercae980ebf12d\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScopercae980ebf12d\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScopercae980ebf12d\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScopercae980ebf12d\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScopercae980ebf12d\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
