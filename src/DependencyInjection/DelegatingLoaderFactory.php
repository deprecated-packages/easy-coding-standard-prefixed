<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperae959d396e95\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperae959d396e95\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperae959d396e95\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperae959d396e95\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperae959d396e95\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperae959d396e95\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperae959d396e95\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperae959d396e95\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperae959d396e95\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperae959d396e95\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperae959d396e95\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperae959d396e95\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperae959d396e95\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperae959d396e95\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperae959d396e95\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperae959d396e95\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperae959d396e95\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperae959d396e95\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperae959d396e95\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperae959d396e95\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
