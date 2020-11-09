<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScopere015d8a3273c\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScopere015d8a3273c\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScopere015d8a3273c\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScopere015d8a3273c\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere015d8a3273c\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScopere015d8a3273c\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopere015d8a3273c\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScopere015d8a3273c\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScopere015d8a3273c\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScopere015d8a3273c\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScopere015d8a3273c\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopere015d8a3273c\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScopere015d8a3273c\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScopere015d8a3273c\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScopere015d8a3273c\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScopere015d8a3273c\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
