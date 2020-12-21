<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperfcf15c26e033\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperfcf15c26e033\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperfcf15c26e033\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperfcf15c26e033\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfcf15c26e033\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperfcf15c26e033\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfcf15c26e033\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperfcf15c26e033\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperfcf15c26e033\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperfcf15c26e033\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperfcf15c26e033\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfcf15c26e033\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperfcf15c26e033\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperfcf15c26e033\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperfcf15c26e033\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperfcf15c26e033\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
