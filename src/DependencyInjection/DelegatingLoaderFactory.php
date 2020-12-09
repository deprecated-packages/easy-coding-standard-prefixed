<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperdf15f2b748e9\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperdf15f2b748e9\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperdf15f2b748e9\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperdf15f2b748e9\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdf15f2b748e9\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperdf15f2b748e9\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperdf15f2b748e9\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperdf15f2b748e9\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperdf15f2b748e9\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperdf15f2b748e9\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperdf15f2b748e9\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperdf15f2b748e9\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperdf15f2b748e9\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperdf15f2b748e9\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperdf15f2b748e9\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperdf15f2b748e9\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
