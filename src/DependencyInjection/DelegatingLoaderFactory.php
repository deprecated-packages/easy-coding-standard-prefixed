<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperab9510cd5d97\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperab9510cd5d97\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperab9510cd5d97\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperab9510cd5d97\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperab9510cd5d97\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperab9510cd5d97\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperab9510cd5d97\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperab9510cd5d97\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperab9510cd5d97\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperab9510cd5d97\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperab9510cd5d97\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperab9510cd5d97\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperab9510cd5d97\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperab9510cd5d97\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperab9510cd5d97\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperab9510cd5d97\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
