<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoper58a0a169dcfb\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoper58a0a169dcfb\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoper58a0a169dcfb\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoper58a0a169dcfb\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoper58a0a169dcfb\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper58a0a169dcfb\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoper58a0a169dcfb\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoper58a0a169dcfb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoper58a0a169dcfb\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoper58a0a169dcfb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoper58a0a169dcfb\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoper58a0a169dcfb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoper58a0a169dcfb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoper58a0a169dcfb\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoper58a0a169dcfb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoper58a0a169dcfb\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoper58a0a169dcfb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoper58a0a169dcfb\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoper58a0a169dcfb\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoper58a0a169dcfb\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
