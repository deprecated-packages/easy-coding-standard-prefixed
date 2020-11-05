<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoper39d23eef9a06\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoper39d23eef9a06\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoper39d23eef9a06\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoper39d23eef9a06\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoper39d23eef9a06\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper39d23eef9a06\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoper39d23eef9a06\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoper39d23eef9a06\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoper39d23eef9a06\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoper39d23eef9a06\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoper39d23eef9a06\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoper39d23eef9a06\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoper39d23eef9a06\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoper39d23eef9a06\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoper39d23eef9a06\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoper39d23eef9a06\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoper39d23eef9a06\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoper39d23eef9a06\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoper39d23eef9a06\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoper39d23eef9a06\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
