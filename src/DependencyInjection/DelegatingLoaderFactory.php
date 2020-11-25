<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperaa402dd1b1f1\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaa402dd1b1f1\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperaa402dd1b1f1\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperaa402dd1b1f1\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperaa402dd1b1f1\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperaa402dd1b1f1\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperaa402dd1b1f1\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperaa402dd1b1f1\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperaa402dd1b1f1\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperaa402dd1b1f1\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperaa402dd1b1f1\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperaa402dd1b1f1\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperaa402dd1b1f1\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
