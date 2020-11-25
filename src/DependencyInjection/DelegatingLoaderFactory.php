<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperdc8fbcd7c69d\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperdc8fbcd7c69d\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperdc8fbcd7c69d\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperdc8fbcd7c69d\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperdc8fbcd7c69d\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperdc8fbcd7c69d\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperdc8fbcd7c69d\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperdc8fbcd7c69d\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
