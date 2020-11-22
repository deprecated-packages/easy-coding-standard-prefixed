<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperc5bee3a837bb\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperc5bee3a837bb\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperc5bee3a837bb\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperc5bee3a837bb\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperc5bee3a837bb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperc5bee3a837bb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperc5bee3a837bb\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperc5bee3a837bb\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperc5bee3a837bb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperc5bee3a837bb\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperc5bee3a837bb\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperc5bee3a837bb\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
