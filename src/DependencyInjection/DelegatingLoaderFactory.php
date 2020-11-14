<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperecb978830f1e\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperecb978830f1e\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperecb978830f1e\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperecb978830f1e\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperecb978830f1e\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperecb978830f1e\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperecb978830f1e\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperecb978830f1e\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperecb978830f1e\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperecb978830f1e\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperecb978830f1e\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperecb978830f1e\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperecb978830f1e\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperecb978830f1e\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperecb978830f1e\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperecb978830f1e\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
