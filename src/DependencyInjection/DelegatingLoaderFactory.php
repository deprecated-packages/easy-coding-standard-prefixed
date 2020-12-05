<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperaba240c3d5f1\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperaba240c3d5f1\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperaba240c3d5f1\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperaba240c3d5f1\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaba240c3d5f1\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperaba240c3d5f1\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperaba240c3d5f1\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperaba240c3d5f1\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperaba240c3d5f1\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperaba240c3d5f1\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperaba240c3d5f1\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperaba240c3d5f1\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperaba240c3d5f1\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperaba240c3d5f1\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperaba240c3d5f1\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperaba240c3d5f1\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
