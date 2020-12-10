<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperfab1bfb7ec99\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperfab1bfb7ec99\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperfab1bfb7ec99\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperfab1bfb7ec99\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfab1bfb7ec99\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperfab1bfb7ec99\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfab1bfb7ec99\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperfab1bfb7ec99\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperfab1bfb7ec99\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperfab1bfb7ec99\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperfab1bfb7ec99\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfab1bfb7ec99\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperfab1bfb7ec99\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperfab1bfb7ec99\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperfab1bfb7ec99\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperfab1bfb7ec99\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
