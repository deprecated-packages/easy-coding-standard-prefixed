<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperac4e86be08e5\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperac4e86be08e5\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperac4e86be08e5\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperac4e86be08e5\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperac4e86be08e5\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperac4e86be08e5\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperac4e86be08e5\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperac4e86be08e5\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperac4e86be08e5\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperac4e86be08e5\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperac4e86be08e5\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperac4e86be08e5\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
