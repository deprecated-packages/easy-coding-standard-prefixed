<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScopercd2fc5ef50ef\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScopercd2fc5ef50ef\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScopercd2fc5ef50ef\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScopercd2fc5ef50ef\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScopercd2fc5ef50ef\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopercd2fc5ef50ef\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScopercd2fc5ef50ef\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScopercd2fc5ef50ef\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScopercd2fc5ef50ef\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScopercd2fc5ef50ef\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
