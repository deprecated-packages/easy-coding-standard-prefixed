<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperfcce67077a55\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperfcce67077a55\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperfcce67077a55\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperfcce67077a55\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfcce67077a55\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperfcce67077a55\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfcce67077a55\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperfcce67077a55\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperfcce67077a55\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperfcce67077a55\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperfcce67077a55\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfcce67077a55\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperfcce67077a55\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperfcce67077a55\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperfcce67077a55\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperfcce67077a55\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
