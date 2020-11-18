<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperf77bffce0320\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperf77bffce0320\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperf77bffce0320\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperf77bffce0320\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperf77bffce0320\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf77bffce0320\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperf77bffce0320\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperf77bffce0320\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperf77bffce0320\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperf77bffce0320\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperf77bffce0320\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperf77bffce0320\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperf77bffce0320\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperf77bffce0320\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperf77bffce0320\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperf77bffce0320\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperf77bffce0320\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperf77bffce0320\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperf77bffce0320\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperf77bffce0320\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
