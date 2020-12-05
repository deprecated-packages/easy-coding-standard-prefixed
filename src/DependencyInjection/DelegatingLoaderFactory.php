<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperbaf90856897c\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperbaf90856897c\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperbaf90856897c\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperbaf90856897c\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbaf90856897c\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperbaf90856897c\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperbaf90856897c\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperbaf90856897c\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperbaf90856897c\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperbaf90856897c\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperbaf90856897c\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperbaf90856897c\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperbaf90856897c\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperbaf90856897c\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperbaf90856897c\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperbaf90856897c\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
