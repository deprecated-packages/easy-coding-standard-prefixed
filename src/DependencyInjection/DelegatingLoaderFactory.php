<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperedc2e0c967db\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperedc2e0c967db\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperedc2e0c967db\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
