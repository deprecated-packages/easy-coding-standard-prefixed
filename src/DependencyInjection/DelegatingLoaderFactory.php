<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperba24099fc6fd\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperba24099fc6fd\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperba24099fc6fd\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperba24099fc6fd\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperba24099fc6fd\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperba24099fc6fd\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperba24099fc6fd\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperba24099fc6fd\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperba24099fc6fd\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperba24099fc6fd\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperba24099fc6fd\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperba24099fc6fd\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
