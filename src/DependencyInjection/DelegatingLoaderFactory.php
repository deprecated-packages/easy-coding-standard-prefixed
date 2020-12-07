<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperfa521053d812\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperfa521053d812\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperfa521053d812\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperfa521053d812\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfa521053d812\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfa521053d812\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperfa521053d812\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperfa521053d812\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfa521053d812\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperfa521053d812\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperfa521053d812\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperfa521053d812\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperfa521053d812\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperfa521053d812\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperfa521053d812\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfa521053d812\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperfa521053d812\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperfa521053d812\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperfa521053d812\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperfa521053d812\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
