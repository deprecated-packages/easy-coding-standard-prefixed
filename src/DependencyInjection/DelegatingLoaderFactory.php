<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperb6a8e65b492c\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperb6a8e65b492c\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperb6a8e65b492c\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperb6a8e65b492c\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb6a8e65b492c\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperb6a8e65b492c\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperb6a8e65b492c\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperb6a8e65b492c\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperb6a8e65b492c\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperb6a8e65b492c\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperb6a8e65b492c\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperb6a8e65b492c\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperb6a8e65b492c\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperb6a8e65b492c\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperb6a8e65b492c\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperb6a8e65b492c\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
