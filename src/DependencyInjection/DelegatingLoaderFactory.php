<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperef5048aa2573\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperef5048aa2573\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperef5048aa2573\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperef5048aa2573\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperef5048aa2573\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperef5048aa2573\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperef5048aa2573\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperef5048aa2573\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperef5048aa2573\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperef5048aa2573\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperef5048aa2573\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperef5048aa2573\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperef5048aa2573\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperef5048aa2573\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperef5048aa2573\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperef5048aa2573\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperef5048aa2573\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperef5048aa2573\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperef5048aa2573\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperef5048aa2573\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
