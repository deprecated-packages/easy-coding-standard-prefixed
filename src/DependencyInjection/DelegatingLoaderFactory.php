<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperfcee700af3df\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperfcee700af3df\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperfcee700af3df\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperfcee700af3df\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfcee700af3df\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperfcee700af3df\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfcee700af3df\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperfcee700af3df\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperfcee700af3df\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperfcee700af3df\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperfcee700af3df\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfcee700af3df\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperfcee700af3df\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperfcee700af3df\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperfcee700af3df\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperfcee700af3df\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
