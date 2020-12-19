<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoper59da9ac954a6\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoper59da9ac954a6\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoper59da9ac954a6\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoper59da9ac954a6\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoper59da9ac954a6\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper59da9ac954a6\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoper59da9ac954a6\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoper59da9ac954a6\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoper59da9ac954a6\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoper59da9ac954a6\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoper59da9ac954a6\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoper59da9ac954a6\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoper59da9ac954a6\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoper59da9ac954a6\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoper59da9ac954a6\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoper59da9ac954a6\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoper59da9ac954a6\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoper59da9ac954a6\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoper59da9ac954a6\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoper59da9ac954a6\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
