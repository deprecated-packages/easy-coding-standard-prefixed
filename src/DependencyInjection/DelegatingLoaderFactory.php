<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperfb2c402b972b\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperfb2c402b972b\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperfb2c402b972b\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperfb2c402b972b\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfb2c402b972b\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperfb2c402b972b\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfb2c402b972b\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperfb2c402b972b\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperfb2c402b972b\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperfb2c402b972b\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperfb2c402b972b\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfb2c402b972b\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperfb2c402b972b\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperfb2c402b972b\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperfb2c402b972b\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperfb2c402b972b\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
