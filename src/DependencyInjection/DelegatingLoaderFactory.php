<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperda2604e33acb\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperda2604e33acb\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperda2604e33acb\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperda2604e33acb\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperda2604e33acb\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperda2604e33acb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperda2604e33acb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperda2604e33acb\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperda2604e33acb\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperda2604e33acb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperda2604e33acb\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperda2604e33acb\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperda2604e33acb\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
