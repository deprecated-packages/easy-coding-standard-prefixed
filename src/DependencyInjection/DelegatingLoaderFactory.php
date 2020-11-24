<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperbd5fb781fe24\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperbd5fb781fe24\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperbd5fb781fe24\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperbd5fb781fe24\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperbd5fb781fe24\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbd5fb781fe24\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperbd5fb781fe24\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperbd5fb781fe24\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperbd5fb781fe24\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperbd5fb781fe24\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperbd5fb781fe24\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperbd5fb781fe24\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperbd5fb781fe24\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperbd5fb781fe24\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperbd5fb781fe24\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperbd5fb781fe24\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperbd5fb781fe24\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperbd5fb781fe24\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperbd5fb781fe24\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperbd5fb781fe24\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
