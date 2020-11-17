<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperad4b7e2c09d8\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperad4b7e2c09d8\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperad4b7e2c09d8\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperad4b7e2c09d8\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperad4b7e2c09d8\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperad4b7e2c09d8\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperad4b7e2c09d8\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperad4b7e2c09d8\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperad4b7e2c09d8\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperad4b7e2c09d8\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperad4b7e2c09d8\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperad4b7e2c09d8\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
