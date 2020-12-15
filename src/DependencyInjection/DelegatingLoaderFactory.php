<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperdeea1786e972\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperdeea1786e972\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperdeea1786e972\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperdeea1786e972\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdeea1786e972\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperdeea1786e972\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperdeea1786e972\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperdeea1786e972\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperdeea1786e972\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperdeea1786e972\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperdeea1786e972\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperdeea1786e972\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperdeea1786e972\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperdeea1786e972\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperdeea1786e972\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperdeea1786e972\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
