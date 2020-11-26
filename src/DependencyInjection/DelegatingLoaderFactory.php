<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperb2e2c0c42e71\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperb2e2c0c42e71\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperb2e2c0c42e71\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperb2e2c0c42e71\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb2e2c0c42e71\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperb2e2c0c42e71\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperb2e2c0c42e71\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperb2e2c0c42e71\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperb2e2c0c42e71\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperb2e2c0c42e71\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperb2e2c0c42e71\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperb2e2c0c42e71\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperb2e2c0c42e71\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperb2e2c0c42e71\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperb2e2c0c42e71\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperb2e2c0c42e71\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
