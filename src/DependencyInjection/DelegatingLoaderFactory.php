<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperfaaf57618f34\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperfaaf57618f34\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperfaaf57618f34\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperfaaf57618f34\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfaaf57618f34\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperfaaf57618f34\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfaaf57618f34\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperfaaf57618f34\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperfaaf57618f34\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperfaaf57618f34\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperfaaf57618f34\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfaaf57618f34\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperfaaf57618f34\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperfaaf57618f34\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperfaaf57618f34\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperfaaf57618f34\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
