<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScopercc9aec205203\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScopercc9aec205203\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScopercc9aec205203\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScopercc9aec205203\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScopercc9aec205203\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercc9aec205203\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScopercc9aec205203\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScopercc9aec205203\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopercc9aec205203\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScopercc9aec205203\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScopercc9aec205203\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScopercc9aec205203\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScopercc9aec205203\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScopercc9aec205203\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScopercc9aec205203\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopercc9aec205203\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScopercc9aec205203\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScopercc9aec205203\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScopercc9aec205203\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScopercc9aec205203\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
